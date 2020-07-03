<?php
	include("signup/function.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Select Data</title>
	<style >
				.search_categories{
		  font-size: 13px;
		  padding: 10px 8px 10px 14px;
		  background: #fff;
		  border: 1px solid #ccc;
		  border-radius: 6px;
		  overflow: hidden;
		  position: relative;
		}

		.search_categories .select{
		  width: 120%;
		  background:url('arrow.png') no-repeat;
		  background-position:80% center;
		}

		.search_categories .select select{
		  background: transparent;
		  line-height: 1;
		  border: 0;
		  padding: 0;
		  border-radius: 0;
		  width: 120%;
		  position: relative;
		  z-index: 10;
		  font-size: 1em;
		}
		.container{
			margin-left: 500px;
			margin-right:500px;
			padding-left:15px;
			padding-right:15px;
			font-family: "Comic Sans MS";
		}

	</style>
</head>
<body>

	<?php
			echo " Welcome" . $_SESSION['user']['name']; 
	?>

	<form action="admin_gazet.php" method="post">
		<div class="container">		
			<div class="search_categories">
			    <div class="select">
			    	<label>Select Academic Year</label>
			       <select name="academic_year" id="search_categories">
			          <option value="DEC-2017" >DEC-2017</option>
			          <option value="MAY-2017">MAY-2017</option>
			          <option value="DEC-2016">DEC-2016</option>
			          <option value="MAY-2016">MAY-2016</option>
			          <option value="DEC-2015">DEC-2015</option>
			          <option value="MAY-2015">MAY-2015</option>
			        </select>
			     </div>
			     <br>
			     <br>
	 	

			    <div class="select">
			    	<label>Select department</label>
			       <select name="dept" id="search_categories">
			          <option value="co">Co</option>
			          <option value="me">ME</option>
			          <option value="extc">EXTC</option>
			          <option value="ee">EE</option>
			          <option value="ce">CE</option>
			          <option value="ph">PH</option>
			          <option value="ar">AR</option>

			        </select>
			     </div>
	 		

<br><br>
			<div class="select">
			    	<label>Select sem</label>
			       <select name="sem" id="search_categories">
			          <option value="1">sem1</option>
			          <option value="2">sem2</option>
			          <option value="3">sem3</option>
			          <option value="4">sem4</option>
			          <option value="5">sem5</option>
			          <option value="6">sem6</option>
			          <option value="7">sem7</option>
			          <option value="8">sem8</option>

			        </select>
			     </div>	 		


<br><br>
			<div class="select">
			    	<label>Select Pattern</label>
			       <select name="exam_type" id="search_categories">
			          <option value="old">old</option>
			          <option value="revised">revised</option>
			          <option value="cbsgs">cbsgs</option>
			          <option value="choice_based">Choice Based</option>

			        </select>
			     </div>	

			     <input type="submit" name="submit">
	 		</div>	 	
	 	</div>

<br><br>
	</form>
</body>
</html>