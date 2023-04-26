<?php
class greeting1 {
    public static function welcome(): void
    {
        echo "Hello World!";
    }

    public function __construct() {
        self::welcome();
    }
}

new greeting1();
?>
    <br>
<?php
class A {
    public static function welcome(): void
    {
        echo "Hello World!";
    }
}

class B {
    public function message(): void
    {
        A::welcome();
    }
}

$obj = new B();
echo $obj -> message();
?>
<br>
<?php
class domain {
    protected static function getWebsiteName(): string
    {
        return "W3Schools.com";
    }
}

class domainW3 extends domain {
    public string $websiteName;
    public function __construct() {
        $this->websiteName = parent::getWebsiteName();
    }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>
