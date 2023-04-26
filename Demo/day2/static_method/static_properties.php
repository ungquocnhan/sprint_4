<?php
class pi {
    public static float $value = 3.14159;

    public function staticValue(): float
    {
        return self::$value;
    }
}

class x extends pi {
    public function xStatic(): float
    {
        return parent::$value;
    }
}
$pi = new pi();
echo $pi->staticValue();
echo "<br>";
// Get static property
echo pi::$value;
echo "<br>";
// Get value of static property directly via child class
echo x::$value;
echo "<br>";

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>
