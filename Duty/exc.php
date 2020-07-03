

<?php 
  session_start(); 

  if (!isset($_SESSION['user_name'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_name']);
    header("location: home.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>exam cell</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php  if (isset($_SESSION['user_name'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['user_name']; ?></strong></p><br>
      <p> <a href="home.php" style="color: red;">logout</a> </p>
    <?php endif ?>
    
</body>
</html>