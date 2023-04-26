<?php
trait message1 {
    public function msg1(): void
    {
        echo "OOP is fun! ";
    }
}

class Welcome {
    use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
