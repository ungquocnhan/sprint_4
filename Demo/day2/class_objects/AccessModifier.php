<?php

namespace class_objects;

class AccessModifier
{
    public string $name;
//    protected string $color;
    public string $color;
//    private string $weight;
    public string $weight;

    function set_name($n): void
    {  // a public function (default)
        $this->name = $n;
    }

    protected function set_color($n): void
    { // a protected function
        $this->color = $n;
    }

    private function set_weight($n): void
    { // a private function
        $this->weight = $n;
    }
}

$mango = new AccessModifier();
$mango->name = 'Mango'; // OK
echo $mango->name;
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR

$mango->set_name('Mango'); // OK
echo $mango->name;
//$mango->set_color('Yellow'); // ERROR
//$mango->set_weight('300'); // ERROR

