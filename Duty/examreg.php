
<?php 
include('examb.php'); ?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="UTF-8">
  <title>Exam cell</title>

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">

    <Style>

   body{
     background-image:url("3.jpg");
    background-size: cover;
    } 

    button{
      background-color: #1c6ced;
      border-color: #1c6ced;
    }
  


    
  </Style>

 </head>
 <body>


  <form action="examreg.php" method="POST" >

        
         <h1>Exam Cell Registration</h1> 
        
        <fieldset>

           <label for="type" class="req">Type:</label>
           <select id="typ" name="type" onclick="Select()">
            <option>Exam cell</option>
            </select>
        
          <label for="name" class="req">Name:</label>
          <input type="text" id="name" name="name">

          <label for="name" class="req">Username:</label>
          <input type="text" id="user" name="user_name">

          <label>Gender:</label>
          
          <input type="radio" id="female" value="female" name="gender"><label for="gender" class="light">Female</label>
          <input type="radio" id="male" value="male" name="gender"><label for="gender" class="light">Male</label>
          <br></br>

          <label for="contact_no" class="req">Contact Number:</label>
          <input type="text" id="contact_no" name="contact">

          <label for="mail">Email:<span class="req"></label>
          <input type="email" id="mail" name="email">
        
          <label for="pwd">Password:<span class="req">
          <input type="password" id="pwd" name="password_1">  

          <label for="confirmpwd">Confirm Password:<span class="req">
          <input type="password" id="copwd" name="password_2">  
     
          <button type="submit" name="reg_user">Register</button>  

        
       <p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p> 

<?php include("error.php") ?>

        </fieldset>



    
    </body>
  </html>