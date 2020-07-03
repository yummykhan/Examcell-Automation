<?php$conn = mysqli_connect('localhost','root','','gazzete');
		
		function get_states() {

	//get stuff in the cart and return in indexed array
	$q1 = "SELECT s_name FROM student ";
	$incart_r = mysqli_query($conn,$q1) or die(mysqli_error());

	$contents = array();
		
	while($incart = mysqli_fetch_array($incart_r)){
						
		//build array of info
		$item = $incart['s_name'];
		array_push($contents,$item);
	}

	return $contents ;

}

$c = get_states();

$cols = 3;  // decide how many cells you want, wide

$rows = ceil( count($c) / $cols ); // works out how many rows

$cnt = 1; // set a counter for upcoming loop

echo '<table><tr valign=top><td>' . PHP_EOL; // start table

//foreach ($array as $name){

for($i=0; $i < count($c); $i++){

if( $cnt >= $rows ) {  // start a new TD when you get to the number of rows

 echo "<p><a href='?stateID=" . $c[$i][0] . "'>"  .PHP_EOL ;
  $cnt = 0;  // reset the counter, and start a new column

 }else{ // other wise just echo the country name

  echo "<p><a href='?stateID=" . $c[$i][0] . "'>"  . PHP_EOL;

 }
$cnt++;
}
echo '</td></tr></table>' . PHP_EOL;





?>