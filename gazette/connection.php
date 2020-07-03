<?php
		include('signup/function.php');
		$conn = mysqli_connect('localhost','root','hozefa','gazzete');

        function calculateGradeEse($num){
				      		global $grade;
				      		switch ($num)
								{
								case $num < 32: 
									$grade = 'F';
									break;
								case $num <= 35: 
									
									$grade = 'P';
									break;
								case $num <= 40:
									
									$grade = 'E';
									break;
								case $num <= 45:
									
									$grade = 'D';
									break;
								case $num <= 50:
									
									$grade = 'C';
									break;
								case $num <= 55:
									
									$grade = 'B';
									break;
								case $num <= 60:
									
									$grade = 'A';
									break;
								case $num >60:
									
									$grade = 'O';
									break;
									
								}

					echo $grade;			
        }	




        function calculateGradeIa($num){
				      		global $grade;
				      		switch ($num)
								{
								case $num < 7: 
									$grade = 'F';
									break;
								case $num <= 8: 
									
									$grade = 'P';
									break;
								case $num <= 10:
									
									$grade = 'E';
									break;
								case $num <= 12:
									
									$grade = 'D';
									break;
								case $num <= 13:
									
									$grade = 'C';
									break;
								case $num <= 14:
									
									$grade = 'B';
									break;
								case $num <= 15:
									
									$grade = 'A';
									break;
								case $num >17:
									
									$grade = 'O';
									break;
									
								}

					echo $grade;			
        }	



        function calculateGradeTot($num){
				      		global $grade;
				      		switch ($num)
								{
								case $num < 40: 
									$grade = 'F';
									break;
								case ('	40 >= $num < 45'): 
									
									$grade = 'P';
									break;
								case ('45>=$num < 50'):
									
									$grade = 'E';
									break;
								case ('50>= $num < 60'):
									
									$grade = 'D';
									break;
								case ('60>= $num < 70'):
									
									$grade = 'C';
									break;
								case ('70>= $num < 75'):
									
									$grade = 'B';
									break;
								case ('75 >= $num <80'):
									
									$grade = 'A';
									break;
								case ('$num >=80'):
									
									$grade = 'O';
									break;
									
								}

					echo $grade;			
        }	
?>
