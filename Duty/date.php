<!-- <?php
  #to display the date 

$begin = new DateTime('2013-02-01');
$end = new DateTime('2013-02-13');

$daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);

foreach($daterange as $date){
    echo $date->format("d-m-y") . "<br>";
}

?>


<br>  to display the date in loops-->

<?php
	// Set timezone
	date_default_timezone_set('UTC');

	// Start date
	$date = '2009-12-06';
	// End date
	$end_date = '2020-12-31';

	while (strtotime($date) <= strtotime($end_date)) {
                //echo "$date\n";
                $d = date('m',$date);
                echo "$d";
              $m = date('d',$date);
              echo "$m";
                //$date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
	}

?> 

<!--  <br>  to display the date with month-->
<!-- <?php
date_default_timezone_set('UTC');

$start_date = '2015-01-01';
$end_date = '2015-01-10';

while (strtotime($start_date) <= strtotime($end_date)) {
  echo "$start_date\n";
    $day = date('D', $start_date);
    echo "$day"."<br>";
    $month = date('M', $start_date);
    echo  "$month";
    $start_date = date ("Y-m-d", strtotime("+1 days", strtotime($start_date)));
}


?> -->