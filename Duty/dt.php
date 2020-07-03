

<?php
$startdate=strtotime("Saturday");
$enddate=strtotime("+1 week", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 day", $startdate);
}
?>
