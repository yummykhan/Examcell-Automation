<?php

include("style.php");
$faculty_id;
$name=$post=$result=$no_of_duties=$row="";
$conn=mysqli_connect('localhost','root','','duty');

if(!$conn){
  echo '<h1>Error</h1>';
}

$sql="SELECT faculty_id,name,post from faculty  where type='Non-Teaching'";
$result = mysqli_query($conn,$sql);
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
   <style type="text/css">
    .abc{
      border: hidden; 
    }

    #aa{
      color:white;
    }

    #abc{
      color:black;
    }
  </style>
</head>
<body>
<h3 style="margin-left:450px;" id="aa">Duty Assigned ..!</h3>
<form action="basag.php" method="POST">
<table class="table" id="aa" >
    <div class="col-sm-4">

    <thead>
      <tr>
        <th>Staff Name</th>
        <th>No_of_duties</th>
         <th>Post</th>
          
      </tr>
 
    </thead>
    <tbody>
  <?php while($row = mysqli_fetch_array($result)) {
    for( $i=0;$i<=$row['name'] ; $i++) { ?>
 <tr>
  <td><?php $name=$row['name']; echo $name;
  if($name == $row['name']){

   $faculty_id[$i]= $row['faculty_id'];
   echo "<input type='hidden'  name='faculty_id[]' id='abc' value='".$faculty_id[$i]."'>";
} ?> </td>
  
  <td><input type='text' id='abc' name='no_of_duties[]'>
    <!-- <?php $no_of_duties = $_POST['no_of_duties'];  ?>  -->
  </td>  
  <td > <?php $post[$i]=$row['post']; 
  echo "<input type='text' class='abc' name='post[]' id='abc' value='".$post[$i]."'>";
         // echo $post[$i];
  ?> </td>
  </tr>
  <?php }} ?>
</tbody>
</div>
</table>
<button type="submit" name="submit">SUBMIT</button>
</form>
</body>
</html>
