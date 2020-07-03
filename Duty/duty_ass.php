<?php
include("style.php");
$faculty_id;
$name=$post=$result=$no_of_duties=$row="";
$conn=mysqli_connect('localhost','root','','duty');

if(!$conn){
  echo '<h1>Error</h1>';
}

$sql1="SELECT faculty_id,name from faculty where type='Teaching'";
$result = mysqli_query($conn,$sql1);

?>


<!DOCTYPE html>
<html>
<head>
  <title>Duty_Assigned</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  #ab{
    color: white;
  }
</style>

<body>
<fieldset>
<form action="duty_ass.php" method="POST">
  
<div class="container-fluid">
  <h1 id="ab">Duty Assigned:</h1>
  
  <table class="table" id="ab">
    <div class="col-sm-3">

    <thead>
      <tr>
        <th>Staff Name</th>
        <th>No_of_duties</th>
         <th>Post</th>
          
      </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT f.name,d.no_of_duties,d.post from duty_assigned d join faculty f where f.faculty_id=d.faculty_id";
    $result1 = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result1)){?>
    
<tr>

  <td> <?php $faculty_id = $row['name'];
      echo $faculty_id;?></td>
  
  <td> <?php $duty = $row['no_of_duties'];
        echo $duty;?></td>

  <td> <?php $postt = $row['post'];
        echo $postt;?></td>
          
</tr>
       <?php }?>
     
     </tbody>
        </div>
        </table>
     </form>
</fieldset>
</body>
</html>