<?php
/*
 * Demo constant
 */
const GREETING = "Welcome to W3Schools.com!";
echo GREETING;
echo "<br>";
const greeting = "Welcome to W3Schools.com!";
echo greeting;
echo "<br>";
//const x1 = 5;
define($x1, 5, true);
const x2 = 5;
echo $x1 + x2;
echo "<br>";
const cars = [
    "Alfa Romeo",
    "BMW",
    "Toyota"
];
echo cars[0];

echo "<br>";
function myTest(): void {
    echo GREETING;
}

myTest();
echo "<br>";