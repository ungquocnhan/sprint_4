<?php
/*
 * Demo is_int()
 */
$x = 5985;
var_dump(is_int($x));
echo "<br>";
$x = 59.85;
var_dump(is_int($x));
echo "<br>";

/*
 * Demo is_float()
 */
$x = 10.365;
var_dump(is_float($x));
echo "<br>";
$x = 10;
var_dump(is_float($x));
echo "<br>";

/*
 * Demo infinite()
 */
$x = 1.9e411;
var_dump($x);
echo "<br>";

/*
 * Demo is_nan()
 */
$x = acos(8);
var_dump(is_nan($x));
$y = 8;
var_dump(is_nan($y));
echo "<br>";

/*
 * Demo is_numeric()
 */
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";

/*
 * Casting Strings and Floats to Integers
 */
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";