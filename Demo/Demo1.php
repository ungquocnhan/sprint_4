<h1>My first PHP page</h1>

<?php

$dat = "Hello World";
$dat1 = "Hello World";
print "result = " . $dat . "result " . $dat1;
echo "<br>";
echo "result = ", $dat, "result ", $dat1;
echo "<br>";
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
print_r($x + $y); // union of $x and $y
echo "<br>";
$t = date("H");

if ($t < 10) {
    echo "Have a good day!";
}
echo "<br>";
$t = date("H");

if ($t > "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";
$t = date("H");

if ($t > "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";
$x = 5;
if ($x > 0) {
    echo $x . " is Positive";
} else if ($x < 0) {
    echo $x . " is Negative";
} else {
    echo $x . " is Zero";
}
echo "<br>";
$favcolor = "red";

echo match ($favcolor) {
    "red" => "Your favorite color is red!",
    "blue" => "Your favorite color is blue!",
    "green" => "Your favorite color is green!",
    default => "Your favorite color is neither red, blue, nor green!",
};
echo "<br>";
function compareTriplets($a, $b)
{
    $suma = 0;
    $sumb = 0;
    $c = array();
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] < $b[$i]) {
            $sumb++;
        } else if ($a[$i] > $b[$i]) {
            $suma++;
        }
    }
    $c[0] = $suma;
    $c[1] = $sumb;
    return $c;
}

?>


<br>
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
<br>

<?php


function diagonalDifference($arr)
{
    // Write your code here
    $sum1 = 0;
    for ($i = 0; $i < count($arr[$i]); $i++) {
        for ($j = 0; $j < count($arr[$j]); $j++) {
            if ($i === $j) {
                $sum1 += $arr[$i][$j];
            }
        }
    }
    $sum2 = 0;
    for ($i = 0; $i < count($arr[$i]); $i++) {
        for ($j = count($arr[$j]) - 1; $j >= 0; $j--) {
            if ($i + $j === count($arr[$i]) - 1) {
                $sum2 += $arr[$i][$j];
            }
        }
    }

    return abs($sum1 - $sum2);

}

function plusMinus($arr): array
{
    // Write your code here
    $countPositive = 0;
    $countNegative = 0;
    $countZero = 0;
    $arrLength = count($arr);
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > 0) {
            $countPositive++;
        } elseif ($arr[$i] < 0) {
            $countNegative++;
        } elseif ($arr[$i] == 0) {
            $countZero++;
        }
    }
    $resultPositive = $countPositive / $arrLength;
    $resultNegative = $countNegative / $arrLength;
    $resultZero = $countZero / $arrLength;

    return array(round($resultPositive,6), round($resultNegative,6), round($resultZero,6));
}

$arr = [1, 2, 3, -1, -2, -3, 0, 0];
plusMinus($arr) ;



