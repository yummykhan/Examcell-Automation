<?php 
		include("connection.php");



?>

<!DOCTYPE html>
<html>
<head>
	<title>content</title>

	<link rel="stylesheet" type="text/css" href="css/content.css">
</head>
<body>

		<table>
				<tr>
					<th rowspan="3" >Courses</th>
					<th></th>


					<?php 
						while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
				        {  
				            $Subject_code=$row[0];  
				            
					?>

					<th colspan="3"><?php echo $Subject_code; ?></th>

					<?php 	}?>

					<th rowspan="4" class="vertical" >Total</th>

					<th rowspan="6" class="vertical"><p>SGPS(GPA)</p></th>

					<th rowspan="6" class="vertical">Result</th>

					<th rowspan="6" class="vertical">CGPI</th>

					<th rowspan="6" class="vertical">RLE</th>
	

					</tr>


				<tr>
					<td rowspan="2"></td>

					
					<?php 
						 $subj="select subject_name from course ";//select query for viewing users.  
       					 $run1=mysqli_query($conn,$subj);//here run the sql query.  

						while($row=mysqli_fetch_array($run1))//while look to fetch the result and store in a array $row.  
				        {  
				            $Subject_name=$row[0];  
				            
					?>


					<td rowspan="2" colspan="3"><?php  echo $Subject_name ?></td>
				
					<?php } ?>

				</tr>

 				<tr>
 					


 				</tr>
				
				<tr>
					<td rowspan="3">Seat No./Name Of Student</td>
				

					<td></td>

				<?php
					$run2=mysqli_query($conn,$course);//here run the sql query.  
					while($row=mysqli_fetch_array($run2))//while look to fetch the result and store in a array $row.  
				        {  
				      
				?>

					<td>ESE</td>
					<td>IA</td>
					<td>TOT</td>

					<?php } ?>


					
				</tr>

				<tr>
					<td>MaxM</td>


				<?php
					$max_marks="SELECT * FROM max_marks inner join course on max_marks.subject_code=course.subject_code";
					$run3=mysqli_query($conn,$max_marks);//here run the sql query.  
					while($row=mysqli_fetch_array($run3))//while look to fetch the result and store in a array $row.  
				        {  
				      		$ese=$row[1];
				      		$ia=$row[2];
				      		$tot= $ese + $ia;
				?>	
					<td><?php echo $ese; ?></td>
					<td><?php echo $ia; ?></td>
					<td><?php echo $tot; ?></td>

				<?php } ?>	
					<td></td>
				</tr>



				<tr>
					<td>MinM</td>


				<?php
					$min_marks="SELECT * FROM min_marks inner join course on min_marks.subject_code=course.subject_code" ;
					$run4=mysqli_query($conn,$min_marks);//here run the sql query.  
					while($row=mysqli_fetch_array($run4))//while look to fetch the result and store in a array $row.  
				        {  
				      		$ese=$row[1];
				      		$ia=$row[2];
				      		$tot= $ese + $ia;
				?>	
					<td><?php echo $ese; ?></td>
					<td><?php echo $ia; ?></td>
					<td><?php echo $tot; ?></td>

				<?php } ?>	
					<td></td>
				</tr>

				<tr>
					<?php
					$code=$_POST['name'];
					
					$academic_year=$_SESSION['academic_year'];

					$dept=$_SESSION['dept'];

					$sem=$_SESSION['sem'];
					$exam_type=$_SESSION['exam_type'];


					$s_seat="select s_seat_no from student inner join course where student.academic_year='$academic_year' AND student.s_dept='$dept' AND student.s_type='$exam_type' AND course.sem='$sem' AND student.s_name='$code'";
					$run8=mysqli_query($conn,$s_seat);//here run the sql query.    
					while($row=mysqli_fetch_array($run8))//while look to fetch the result and store in a array $row.  
				        {  
				      		$s_seat=$row[0];
				?>	
					<td><?php echo $s_seat;?></td>
				<?php } ?>	
				






				<td>MarksO</td>

				<?php
					$tot=0;
					$obt_marks="SELECT * FROM obt_marks inner join course on obt_marks.subject_code=course.subject_code";
					$run5=mysqli_query($conn,$obt_marks);//here run the sql query.  
					while($row=mysqli_fetch_array($run5))//while look to fetch the result and store in a array $row.  
				        {  
				      		$ese=$row[1];
				      		$ia=$row[2];
				      		$tot= $tot+$ese + $ia;
				      		
				      	
				?>	
					<td><?php echo $ese; ?></td>
					<td><?php echo $ia; ?></td>
					<td><?php echo $ese+$ia; ?></td>

				<?php } ?>	

					<td><?php echo $tot; ?></td>
					<td rowspan="4"></td>
					<td rowspan="4"></td>
					<td rowspan="4"></td>
					<td rowspan="4"></td>
					

				</tr>

				<tr>
					

					<?php
					$academic_year=$_SESSION['academic_year'];
					
					$dept=$_SESSION['dept'];

					$sem=$_SESSION['sem'];

					$exam_type=$_SESSION['exam_type'];
					$s_name="select s_name from student inner join course where student.academic_year='$academic_year' AND student.s_dept='$dept' AND student.s_type='$exam_type' AND course.sem='$sem' AND student.s_name='$code'";
					$run7=mysqli_query($conn,$s_name);//here run the sql query.  
					while($row=mysqli_fetch_array($run7))//while look to fetch the result and store in a array $row.  
				        {  
				      		$s_name=$row[0];
				?>	
					<td rowspan="3"><?php echo $s_name;?></td>
				<?php } ?>	
				


					<td>Grade</td>


				<?php
					$grade1="SELECT * FROM obt_marks inner join course on obt_marks.subject_code=course.subject_code";
					$run6=mysqli_query($conn,$grade1);//here run the sql query.  
					while($row=mysqli_fetch_array($run6))//while look to fetch the result and store in a array $row.  
				        {  
							
				      		$ese=$row[1];
				      		$ia=$row[2];
				      		$tot= $tot+$ese + $ia;
				      		
				?>	
					<td><?php calculateGradeEse($ese);?></td>
					<td><?php calculateGradeIa($ia);?></td>
					<td><?php calculateGradeTot($tot);?></td>

				<?php } ?>
					<td></td>
				</tr>

				<tr>
					
					<td>C</td>


				<?php
					$run2=mysqli_query($conn,$course);//here run the sql query.  
					while($row=mysqli_fetch_array($run2))//while look to fetch the result and store in a array $row.  
				        {  
				      
				?>	
					<td></td>
					<td></td>
					<td></td>

				<?php } ?>
					<td></td>
				</tr>

				<tr>
					
					<td>GP*C</td>


				<?php
					$run2=mysqli_query($conn,$course);//here run the sql query.  
					while($row=mysqli_fetch_array($run2))//while look to fetch the result and store in a array $row.  
				        {  
				      
				?>	
					<td></td>
					<td></td>
					<td></td>

				<?php } ?>
					<td></td>
				</tr>


		</table>

<br>
<hr>
<br>
</body>
</html>