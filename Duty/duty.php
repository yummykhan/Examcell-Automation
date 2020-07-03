   <?php

   $Date=$_POST['date'];
   $Session=$_POST['session'];
   $Subject=$_POST['subject'];
   $conn=mysqli_connect('localhost','root','','duty');
   $Faculty_name = $_POST['name'];
   $Block = $_POST['block'];

for ($i=0; $i<=sizeof($Subject)-1; $i++) { 
	
  $sql="insert into duty_charts(Date,Session,Subject,Faculty_name,Block)values('$Date[$i]','$Session[$i]','$Subject[$i]','$Faculty_name[$i]','$Block[$i]')";

 $result=mysqli_query($conn,$sql);
 if ($result) 
{                                                                                      header("location: exam.php");                    
    echo "New records created successfully";
}}



    ?>