<?php
declare(strict_types=1);
function familyName($fname, $year): void
{
    echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

echo "<hr>";

function addNumbers(int $a, int $b): int
{
    return $a + $b;
}
echo addNumbers(5, (int)"5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
echo "<hr>";

function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
echo "<hr>";
function addNumbersFloat(float $a, float $b) : float {
    return $a + $b;
}
echo addNumbersFloat(1.2, 5.2);
echo "<hr>";

function add_five(&$value): void
{
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;