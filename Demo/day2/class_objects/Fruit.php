<?php

namespace class_objects;

class Fruit
{
    public string $name;
    public string $color;

//    public function __construct()
//    {
//    }

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}

$apple = new Fruit("Apple", "red");
//$banana = new Fruit();
//$apple->setName('Apple');
//$banana->setName('Banana');
//$apple->setColor('Red');
echo "Name: " . $apple->getName();
echo "<br>";
echo "Color: " . $apple->getColor();
echo "<br>";
//echo $banana->getName();
