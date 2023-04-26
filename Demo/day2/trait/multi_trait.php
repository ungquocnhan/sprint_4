<?php
trait message11 {
    public function msg1(): void
    {
        echo "OOP is fun! ";
    }
}

trait message2 {
    public function msg2(): void
    {
        echo "OOP reduces code duplication!";
    }
}

class Welcome1 {
    use message11;
}

class Welcome2 {
    use message11, message2;
}

$obj = new Welcome1();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();
?>
