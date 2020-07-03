<?php
session_start();
// print_r($_SESSION); die();
if(isset($_SESSION['user_name'])&& $_SESSION['type']== 'Exam cell'){
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Exam cell</title>
  <link href="csss/bootstrap.min.css" rel="stylesheet">
  <link href="csss/bootstrap-theme.css" rel="stylesheet">
  <link href="csss/elegant-icons-style.css" rel="stylesheet" />
  <link href="csss/font-awesome.min.css" rel="stylesheet" />
  <link href="csss/widgets.css" rel="stylesheet">
  <link href="csss/style.css" rel="stylesheet">
  <link href="csss/style-responsive.css" rel="stylesheet" />
  <link href="csss/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    p{
  float :right;
  }
  </style>
</head>

<body>
  <section id="container" class="">
     <header class="header dark-bg">
      <a href="#" class="logo">Exam <span class="lite">Cell</span></a>
      <p><?php
        include "tea.php";
      ?></p>
     </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu">
          <li><a class="" href="slot_de.php">
                          <i class="icon_table"></i>
                          <span>Slot Defined</span></a></li>

           <li><a class="" href="timtab.php">
                          <i class="icon_table"></i>
                          <span>Time Table</span></a></li>

         <li><a class="" href="asag.php">
                          <i class="icon_table"></i>
                          <span>Duty Assigned <br> Teaching Staff</span></a></li>

        <li><a class="" href="dutys.php">
                          <i class="icon_table"></i>
                          <span>Duty Chart <br> Teaching Staff</span></a></li>

          <!-- <li><a class="" href="nonass.php">
                          <i class="icon_table"></i>
                          <span>Duty Assigned <br> Non-Teaching Staff</span></a></li>        

        <li><a class="" href="nonchart.php">
                          <i class="icon_table"></i>
                          <span>Duty Chart <br> Non-Teaching Staff</span></a></li>                      
           -->  </ul>
      </div>
    </aside>
  </section>
  </body>
</html>

<?php }

else{
  header ("location:login.php");
}

?>
   
 

