<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ma";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*$sql= "SELECT regis_name,regis_pass  FROM reg WHERE regis_name='$name' AND regis_pass='$pass'";
//$sql1= "SELECT regis_fullname  FROM reg WHERE regis_name='$name' AND regis_pass='$pass'";
//$sql1=mysqli_query("SELECT regis_pass FROM reg WHERE regis_pass LIKE '.$pass.'");
/*$result = mysqli_query($conn, $sql);*/
/*$result=mysqli_query($conn,$sql) or die(mysqli_connect_error());
echo $name;
$num_row=mysqli_num_rows($result);
if($num_row>0)
{
	
   header("Location:prof.php");
}
else
	echo "No such account";*/
	echo $name;
		
session_start();

 $_SESSION["logname"]=$name;
header("Location:mrk.php");
mysqli_close($conn);
}
?>