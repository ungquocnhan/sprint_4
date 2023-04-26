<?php
// Create an Iterator
class MyIterator implements Iterator {
    private array $items = [];
    private int $pointer = 0;

    public function __construct($items) {
        // array_values() makes sure that the keys are numbers
        $this->items = array_values($items);
    }

    public function current() {
        return $this->items[$this->pointer];
    }

    public function key(): int
    {
        return $this->pointer;
    }

    public function next(): void
    {
        $this->pointer++;
    }

    public function rewind(): void
    {
        $this->pointer = 0;
    }

    public function valid(): bool
    {
        // count() indicates how many items are in the list
        return $this->pointer < count($this->items);
    }
}

// A function that uses iterables
function printIterable(iterable $myIterable): void
{
    foreach($myIterable as $item) {
        echo $item;
    }
}

// Use the iterator as an iterable
$iterator = new MyIterator(["a", "b", "c"]);
printIterable($iterator);
?>
