<?php
// Parent class
abstract class CarAbstract {
    public string $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro() : string;
}

// Child classes
class Audi extends CarAbstract {
    public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends CarAbstract {
    public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends CarAbstract {
    public function intro() : string {
        return "French extravagance! I'm a $this->name!";
    }
}

// Create objects from the child classes
$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new Citroen("Citroen");
echo $citroen->intro();
?>
    <br>
<?php
abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    public function prefixName($name,  $separator = ".", $greet = "Dear"): string
//    {
//        if ($name == "John Doe") {
//            $prefix = "Mr.";
//        } elseif ($name == "Jane Doe") {
//            $prefix = "Mrs.";
//        } else {
//            $prefix = "";
//        }
//        return "{$prefix} {$name}";
//    }
    {
        if ($name == "John Doe") {
            $prefix = "Mr";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>