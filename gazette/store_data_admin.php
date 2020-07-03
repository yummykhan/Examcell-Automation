<?php
	include("signup/function.php");
	
			$academic_year=$_POST['academic_year'];
			$class=$_POST['class'];
			$dept=$_POST['dept'];
			$sem=$_POST['sem'];
			$exam_type=$_POST['exam_type'];
			$regular=$_POST['regular'];

		$sql="INSERT INTO select_data (academic_year,class,dept,sem,exam_type,regular) VALUES ('$academic_year','$class',$dept','$sem','$exam_type','$regular') ";//select query for viewing users.  
        $result=mysqli_query($db,$sql);//here run the sql query.  


        	


?>