<?php
function printIterable(iterable $myIterable): void
{
    foreach($myIterable as $item) {
        echo $item;
    }
}

$arr = ["a", "b", "c"];
printIterable($arr);
?>
    <br>
<?php
function getIterable():iterable {
    return ["a", "b", "c"];
}

$myIterable = getIterable();
foreach($myIterable as $item) {
    echo $item;
}
?>