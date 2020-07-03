   <?php

   $Date=$_POST['date'];
   $Session=$_POST['session'];
   $conn=mysqli_connect('localhost','root','','duty');
   $Faculty_name = $_POST['name'];
   $Block = $_POST['block'];

for ($i=1; $i<=sizeof($Subject); $i++) { 
	
  $sql="insert into duty_charts(Date,Session,Faculty_name,Block)values('$Date[$i]','$Session[$i]','$Faculty_name[$i]','$Block[$i]')";

 $result=mysqli_query($conn,$sql);
}
 if ($result) 
{                                                                                      header("location: exam.php");                    
    echo "New records created successfully";
}


    ?>