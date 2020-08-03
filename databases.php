<?php 

$ip="127.0.0.1";
$name="root";
$pass="root";
$db="coronavirus_infomation";

$induction = mysqli_connect($ip, $name, $pass, $db);
if ($induction == false){
	echo "Қате табылды...";
}
$queryrc="SELECT SUM(people) as `sum` FROM reported_cases";
$rc=mysqli_query($induction, $queryrc);
$data1=mysqli_fetch_array($rc);

$queryr="SELECT SUM(people) as `sum` FROM recovered";
$r=mysqli_query($induction, $queryr);
$data2=mysqli_fetch_array($r);

$querylc="SELECT SUM(people) as `sum` FROM lethal_cases";
$lc=mysqli_query($induction, $querylc);
$data3=mysqli_fetch_array($lc);
 ?>