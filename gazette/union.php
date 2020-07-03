<?php
	include("connection.php");

	$sql="SELECT DISTINCT subject_name,ese,s_name  from student inner join course inner join max_marks  ";

	$run=mysqli_query($conn,$sql);

?>
			  <table border="1">
	<?php

	while($row=mysqli_fetch_array($run))  
        {  

        	$row_0=$row[0];
        	$row_1=$row[1];
        	$row_2=$row[2];
        
		?>
			  	<tr>
					<td><?php echo $row_0 ;?></td>

					<td><?php echo $row_1 ;?></td>
				
					<td><?php echo $row_2 ;?></td>
					
				</tr>
			<?php }	?>					

			  </table> 
				             