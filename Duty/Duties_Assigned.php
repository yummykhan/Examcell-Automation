<?php
 include("style.php");
  $db = mysqli_connect("localhost", "root", "","duty");

$result = mysqli_query($db,"select * from faculty where type='Teaching'");

$remark="";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Time_Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<fieldset>
<form action="Duties_Assigned.php" method="POST">
  
<div class="container-fluid">
  <h1>Duty Assigned:</h1>
  
  <table class="table">
    <div class="col-sm-3">

    <thead>
      <tr>
        <th>Staff Name</th>
        <th>No_of_duties</th>
         <th>Remark</th>
          
      </tr>
    </thead>
    
     <tbody>
      <?php
         while ($row = mysqli_fetch_array($result))
         {

         if($row['post']=='HOD')
         {
          $no_of_duties=0;
        }
        elseif($row['post']=='Assistant Professor')
         {
          $no_of_duties=3;
        }
        elseif($row['post']=='Associate Professor')
        {
          $no_of_duties='4';
        }
        elseif($row['post']=='Professor')
        {
          $no_of_duties='5';
        }
        else
        {
          $no_of_duties='NULL';
        }

    
        echo "<tr> <td>".$row['name']."</td><td>".$no_of_duties."</td> <td>".$row['post']."</td></tr>";
       //  echo $row['name']; 
       //  echo "";
       // // echo $array['no_of_duties']; 
       //  echo "</td> <td>";
       //  echo ;
       //  echo "</td></tr>";
        }

  
  ?>

    
       </tbody>
        </div>
        </table>
     

    

</form>
</fieldset>


</body>
</html>
                                                                                        
 