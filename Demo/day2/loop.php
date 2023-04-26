<?php
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
echo "<hr>";

$x = 1;
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
echo "<hr>";

$x = 1;
while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
echo "<hr>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}