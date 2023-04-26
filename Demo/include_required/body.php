<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
global $color,$car;
?>
<div class="menu">
    <?php include 'menu.php';?>

</div>
<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
<?php include 'vars.php';
echo "I have a $color $car.";
?>
<!--//--><?php //include 'noFileExists.php';
////echo "I have a $color $car.";
////?>
<?php require 'noFileExists.php';
echo "I have a $color $car.";
?>
<?php include 'footer.php';?>
</body>
</html>
