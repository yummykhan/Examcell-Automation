<?php
 include("style.php");
$date=$session=$subject=$name=$block=$tt_id="";
  $conn = mysqli_connect("localhost", "root", "","duty");
  if(!$conn){
  echo '<h1>Error</h1>';
}

$sql = "select tt_id,date,session,subject from time_table";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
   <title>Chart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    .abc{
      border: hidden; 
    }
    
    #abc{
      color: white;
    }

     #aa{
      color: black;
    }

  </style>
</head>

<body>
<fieldset>
<form action="nonduty.php" method="POST">
  
<div class="container-fluid">
  <h1  id="abc">Non-Teaching Duty Chart</h1>
  
  <table class="table"  id="abc">
    <div class="col-sm-4">

    <thead>
     
      <tr>
        <th>Date</th>
        <th>Session</th>
        <th>Faculty Name</th>
        <th>Block No</th>
        
      </tr>
    </thead>
    <tbody>
  <?php while($row = mysqli_fetch_array($result)){
    for( $i=0;$i<=$row['subject'] ; $i++) { ?>
 <tr>
  <td><?php
  $date[$i]=$row['date']; 
   echo "<input type='text' name='date[]' class='abc' id='aa' value='".$date[$i]."'>"; ?> </td>

<td><?php 
$session[$i]=$row['session'];
   echo "<input type='text' name='session[]' class='abc' id='aa' value='".$session[$i]."'>"; ?> </td>
  
  <td><input type='text' name='name[]' id='aa'></td>
  <td><input type='text' name='block[]' id='aa'></td> 
  </tr>
  <?php }} ?>
       </tbody>
        </div>
        </table>
      <button type="submit">SUBMIT</button>
    
    </div>

</form>
</fieldset>


</body>
</html>
