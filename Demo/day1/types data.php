<?php
/*
 * Demo Objects
 */
class Car {
    public string $color;
    public string $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message(): string
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
echo "<br>";

/*
 * Demo null
 */
$x = "Hello world!";
$x = null;
var_dump($x);
echo "<br>";