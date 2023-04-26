<?php
$favcolor = "white";

switch ($favcolor) {
    case "red":
        $favcolor = "green";
        break;
    case "green":
        $favcolor = "blue";
        break;
    case "blue":
        $favcolor = "yellow";
        break;
    case "yellow":
        $favcolor = "orange";
        break;
    case "orange":
        $favcolor = "purple";
        break;
    case "purple":
        $favcolor = "pink";
        break;
    case "pink":
        $favcolor = "white";
        break;
    case "white":
        $favcolor = "black";
        break;
    case "black":
        $favcolor = "gray";
        break;
    case "gray":
        $favcolor = "red";
        break;
    default:
        $favcolor = "teal";
        break;
}
echo "Your favorite color is " . $favcolor;
echo "<br>";

echo match ($favcolor) {
    "red" => "Your favorite color is red!",
    "blue" => "Your favorite color is blue!",
    "green" => "Your favorite color is green!",
    default => "Your favorite color is neither red, blue, nor green!",
};