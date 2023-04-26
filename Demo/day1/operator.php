<?php
/*
 * Demo **
 */
$x = 10;
$y = 3;

echo $x ** $y;
echo "<br>";

/*
 * Demo <=>
 */
$x = 5;
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;

echo ($x <=> $y); // returns +1 because $x is greater than $y
echo "<br>";

/*
 * Demo xor operation
 */
$x = 100;
$y = 50;

if ($x == 100 xor $y == 50) {
    echo "Hello world!";
} else {
    echo "xor return FALSE";
}
echo "<br>";

/*
 * Demo ?:
 */
// if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo "<br>";

/*
 * Demo ??
 */
// variable $user is the value of $_GET['user']
// and 'anonymous' if it does not exist
echo $user = $_GET["user"] ?? "anonymous";
echo("<br>");

// variable $color is "red" if $color does not exist or is null
echo $color = $color ?? "red";
echo "<br>";