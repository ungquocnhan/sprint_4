<?php
final class FruitFinal {
    // some code
}

// will result in error
class StrawberryFinal extends FruitFinal {
    // some code
}
?>

<?php
class FruitFinalMethod {
    final public function intro() {
        // some code
    }
}

class StrawberryFinalMethod extends FruitFinalMethod {
    // will result in error
    public function intro() {
        // some code
    }
}
?>