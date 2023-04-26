<?php
global $mysqli;
include_once(__DIR__.'/connect_db.php');

$id = $_GET['id'];
$sql = "DELETE FROM product WHERE id = $id";
$result = mysqli_query($mysqli, $sql);
mysqli_close($mysqli);
header('location:list.php');
