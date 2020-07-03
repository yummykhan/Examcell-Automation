<?php
if ( !empty($_GET['s'])) {
    if( $_GET['s'] == md5(1) ) {

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Exam Cell | AIKTC</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/round-about.css" rel="stylesheet">

  </head>

  <body>
    <?php include"nav.php";?>
    <?php include "page_container.php";?> 
    <!-- /.container -->
    <?php include"footer.php";?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<?php
    }
    else {
        header("location: index.php");
    }
}
else {
    header("location: index.php");
}
?>