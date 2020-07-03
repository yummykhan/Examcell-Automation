						

					<?php
					include("connection.php");

					$s_name="select s_name from student  ";
					$run7=mysqli_query($conn,$s_name);//here run the sql query.  
					while($row=mysqli_fetch_array($run7))//while look to fetch the result and store in a array $row.  
				        {  
				      		$s_name=$row[0];

				?>	
					<td rowspan="3"><?php  echo "<pre>" .$row['s_name']. "</pre>" 	;?></td>
				<?php 
						
			} ?>	
