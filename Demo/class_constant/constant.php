<?php
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye(): void
    {
        echo self::LEAVING_MESSAGE;
    }
}

echo Goodbye::LEAVING_MESSAGE;
echo "<br>";
$goodbye = new Goodbye();
$goodbye->byebye();
?>
