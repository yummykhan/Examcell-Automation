<?php
include("log.php");
// print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/main.css">
    <style type="text/css">

    body{
    	background-image: url("");
    	background-size: cover;
    }

    form{
    	margin-top: 10%;
    }

    a:hover{
    	text-shadow :1px 1px #b72ca2;
    }

    button{
    	background-color: #1c6ced;
    	border-color: #1c6ced;
    }

    </style>

    </head>
    <body>


<fieldset>
      <form action="login.php" method="POST">
     
        <h1>Login</h1> 
      

                <label for="user_name" class="req">UserName</label>
                <input id="user_name" type="text"  name="user_name">

                <label for="password" class="req">Password</label>
                <input type="password"  name="password">
                   
            <br><br>
             <button type="submit" name="login_user">Login</button>

    <?php include("error.php") ?>
  
  </fieldset>

</body>

</html>
