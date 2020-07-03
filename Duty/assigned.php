<?php

$faculty_id=$name=$post=$result=$no_of_duties=$row="";
$conn=mysqli_connect('localhost','root','','duty');

if(!$conn){
  echo '<h1>Error</h1>';
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Duty Assigned</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h3 style="margin-left:450px;">Duty Assigned ..!</h3>
<form action="asag.php" method="POST">
<table class="table" >
    <div class="col-sm-4">

    <thead>
      <tr>
        <th>Staff Name</th>
        <th>No_of_duties</th>
         <th>Remark</th>
          
      </tr>
    </thead>
    <tbody>
  
</tbody>
</div>
</table>
</form>
</body>
</html>
