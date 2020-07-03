<?php

include("style.php");

?>
<!DOCTYPE html>
<html>
<head>
<title>DUTY ADJUSTMENT</title>
<meta content="noindex, nofollow" name="robots">
<link href='css/exchange_duty.css' rel='stylesheet' type='text/css'> <!--== Include CSS File Here ==-->
<script type="text/javascript">
	
	var c;
              c=document.getElementById("typ").value;

              var u = "Admin";
               var a=document.getElementById("sel1");
                var b=document.getElementById("sel");
            if(c==u){
              a.style.display="none";
               b.style.display="none";  
            }   
            else{
              a.style.display="block";
              b.style.display="block";
          } 

</script>

   
</head>
<body>
<div class="main" style="margin-left: 450px;">
<div class="first">
<h2>DUTY ADJUSTMENT</h2>
<form action="exchange_duty.php" id="#form" method="post" name="#form">

<label>Name :</label>
<input id="name" name="name" placeholder='Your Name' type='text'>
<br>
   <LABEL id="sel1" style='display: block'>Department:</LABEL>
            <select style="display:block" id="sel" name='dept'>
              <option>No Selection</option>
              <option>HAS</option>
              <option>Computer</option>
              <option>Electrical</option>
              <option>Electronics and Telecommunications</option>
              <option>Mechanical</option>
              <option>Civil</option>
            </select>
        </br>

<label>Exchange_Staff_name :</label>
<input id="name" name="name" placeholder='Name' type='text'>
<br>
Enter a date :<br>
<input type="date" name="date"><br><br>

<input id='btn' name="submit" type='submit' value='Submit'>
<!---- Including PHP File Here ---->

</form>
</div>
</div>
</body>
</html>