

<?php
session_start();

$type = "";
$name = "";
$user_name = "";
$gender = "";
$contact ="";
$email  = "";
$post = "";
$department = "";
$password_1 = "";
$password_2= "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'mydb');

if (isset($_POST['reg_user'])) {
 

  $type = mysqli_real_escape_string($db, $_POST['type']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $user_name = mysqli_real_escape_string($db, $_POST['user_name']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $department = mysqli_real_escape_string($db, $_POST['department']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($type)) { array_push($errors, "Type is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($user_name)) { array_push($errors, "Username is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($contact)) { array_push($errors, "Contact is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($department)) { array_push($errors, "Department is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM faculty WHERE user_name='$user_name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['user_name'] === $user_name) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO faculty (type,name,user_name,gender,contact,email,post,department, password) 
  			  VALUES('$type','$name','$user_name','$gender','$contact','$email','$post','$department','$password')";


  	mysqli_query($db, $query);
  	$_SESSION['user_name'] = $user_name;
  	header('location: home.php');
  }
}

