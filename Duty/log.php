<?php

session_start();

$db = mysqli_connect('localhost', 'root', '','duty');
$errors = array(); 

if (isset($_POST['login_user'])) {

  // print_r($_POST); die();

  $user_name = mysqli_real_escape_string($db, $_POST['user_name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($user_name)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM faculty WHERE user_name='$user_name' AND password='$password'";
    $result = mysqli_query($db,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $type=$row['type'];
    if (mysqli_num_rows($result)==1){

      // print_r($row); die();

               if($type == 'Teaching')
              {
                session_start();
              $_SESSION['user_name'] = $user_name;
              $_SESSION['type']= $row['type'];
              header('location: teach.php');
           }
           else if($type == 'Non-Teaching')
              {
                session_start();
                $_SESSION['user_name'] = $user_name;
                 $_SESSION['type']= $row['type'];
                header('location: nonteach.php');
          }
              else if($type == 'Exam cell')
              {
                session_start();
                $_SESSION['user_name'] = $user_name;
                 $_SESSION['type']= $row['type'];
                header('location: exam.php');
              }
              else
               {
                header('location: home.php');
               }

    }
    else {
      array_push($errors, "Wrong username/password combination");
    }

  }
}

?>
