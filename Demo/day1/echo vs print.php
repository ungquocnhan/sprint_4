<?php
/*
 * Demo ECHO display text
 */
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

/*
 * Demo ECHO display variable
 */
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
echo "<br>";

/*
 * Demo PRINT display text
 */
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
print "This ";

/*
 * Demo PRINT display variables
 */

$txt2 = "Learn PHP";
$txt2 = "W3Schools.com";
$x1 = 5;
$y1 = 4;

print "<h2>" . $txt2 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x1 + $y1;
echo "<br>";

$z = print 12345;
echo $z;