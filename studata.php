<?php
$today=date('l');  // day in text format
$day=date('d');
$month=date('m');
$year=date('Y');  // year in 4 digit format
$AM_PM=date('a');

echo $AM_PM;

date_default_timezone_set('America/New_York');
$mydate=mktime(12,24,30,06,20,2014);
$newdate=date('h:i:s',$mydate);  // hour:minute:seconds
echo $newdate;  // seconds passed since 1,Jan,1970
// echo $today."<br/>";
// echo $day."<br/>";
// echo $month."<br/>";
// echo $year;


?>