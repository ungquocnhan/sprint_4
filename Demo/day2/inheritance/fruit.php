<?php
class Fruit {
    public string $name;
    public string $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro(): void
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
//    protected function intro(): void
//    {
//        echo "The fruit is {$this->name} and the color is {$this->color}.";
//    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
    public string $weight;
    public function __construct($name, $color, $weight) {
        parent::__construct($name, $color);
        $this->weight = $weight;
    }
    public function message(): void
    {
        echo "Am I a fruit or a berry? ";
        // Call protected method from within derived class - OK
//        $this -> intro();
    }
    public function intro(): void
    {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
}
$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->message();
echo "<br>";
$strawberry->intro();
?>
