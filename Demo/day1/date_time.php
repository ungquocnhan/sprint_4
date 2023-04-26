<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("d/m/Y") . "<br>";
echo "Today is " . date("l");
?>
<br>
&copy; 2010-<?php echo date("Y");?>
<br>
<?php
echo "The time is " . date("h:i:sa");
?>
<br>
<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
echo "The time is " . date("h:i:sa");
?>
<br>
<?php
$d=mktime(10, 50, 54, 04, 20, 2023);
echo "Created date is " . date("d/m/Y h:i:sa", $d);
?>
<br>
<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

<?php
$startdate = strtotime("l");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}
?>

<?php
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>
