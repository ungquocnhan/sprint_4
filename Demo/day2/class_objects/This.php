<?php

namespace class_objects;

class This
{
public string $name;

function setName($name): void
{
    $this->name = $name;
}
}

$apple = new This();
$apple->setName('Apple');

echo $apple->name;
echo "<br>";
$banana = new This();
$banana->name = "Banana";

echo $banana->name;
echo "<br>";
var_dump($apple instanceof This);