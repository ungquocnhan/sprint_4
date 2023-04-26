<?php
$color = "red";
$COLOR = "blue";
$coLOR = "green";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

$x = 17;
$y = 4;
echo $x + $y;
echo "<br>";

/*
 * Demo global scope
 */
$xGlobal = 5; // global scope
function myTestGlobal(): void
{
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $xGlobal</p>";
}
myTestGlobal();
echo "<p>Variable x outside function is: $xGlobal</p>";
echo "<br>";

/*
 * Demo local scope
 */
function myTestLocal(): void {
    $xLocal = 5; // local scope
    echo "<p>Variable x inside function is: $xLocal </p>";
}
myTestLocal();
// using x outside the function will generate an error
echo "<p>Variable x outside function is: $xLocal </p>";
echo "<br>";

/*
 * Demo global keywords
 */
$x = 5;
$y = 10;
function myTestKeywordGlobal(): void
{
    global $x, $y;
    $y = $x + $y;
}
myTestKeywordGlobal();
echo $y; // outputs 15
echo "<br>";

/*
 * Demo use GLOBALS[index]
 */
$x = 5;
$y = 10;
function myTestGLOBALS(): void {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTestGLOBALS();
echo $y; // outputs 15
echo "<br>";

/*
 * Demo static keyword
 */
function myTestStatic(): void {
    static $x = 0;
    echo $x;
    $x++;
    echo "<br>";
}

myTestStatic();
myTestStatic();
myTestStatic();
echo "<br>";