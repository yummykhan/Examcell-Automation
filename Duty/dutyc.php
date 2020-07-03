<?php
include("style.php");
$faculty_id;
$name=$post=$result=$no_of_duties=$row="";
$conn=mysqli_connect('localhost','root','','duty');

if(!$conn){
  echo '<h1>Error</h1>';
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>chart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  
  #abc{
       color: white;
  }
</style>

<body>
<fieldset>
<form action="#" method="POST">
  
<div class="container-fluid">
  <h1 id="abc">Duty Chart:</h1>
  
  <table class="table" id="abc">
    <div class="col-sm-3">

    <thead>
      <tr>
        <th>Date</th>
        <th>Session</th>
         <th>Subject</th>
         <th>Faculty_name</th>
         <th>Block no</th>
          
      </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT Date,Session,Subject,Faculty_name,Block from duty_charts";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){?>
    
<tr>
  
  <td> <?php $Date = $row['Date'];
        echo $Date;?></td>

        <td> <?php $Session = $row['Session'];
        echo $Session;?></td>

        <td> <?php $Subject = $row['Subject'];
        echo $Subject;?></td>

        <td> <?php $name = $row['Faculty_name'];
        echo $name;?></td>

  <td> <?php $Block = $row['Block'];
        echo $Block;?></td>
          
</tr>
       <?php }?>
     
     </tbody>
        </div>
        </table>
     </form>
</fieldset>
</body>
</html>