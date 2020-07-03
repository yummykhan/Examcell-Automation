   <?php

   $faculty_id=$_POST['faculty_id'];
   $post=$_POST['post'];
   $no_of_duties=$_POST['no_of_duties'];
   $conn=mysqli_connect('localhost','root','','duty');
   $no_of_duties = $_POST['no_of_duties'];

for ($i=0; $i <sizeof($faculty_id) ; $i++) { 
	
  $sql="insert into duty_assigned(faculty_id,no_of_duties,post )values('$faculty_id[$i]','$no_of_duties[$i]','$post[$i]')";

 $result=mysqli_query($conn,$sql);
}
 if ($result) 
{                                                                                      header("location: exam.php");                    
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


    ?>