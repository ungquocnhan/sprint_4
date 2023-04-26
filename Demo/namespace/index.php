<?php
namespace Html;
use Html as H;
use Html\Table as T;
include "namespace.php";
//$table = new Html\Table();
//$table = new H\Table();
//$table = new Table();
$table = new T();
$table->title = "My table";
$table->numRows = 5;

//$row = new Html\Row();
$row = new H\Row();
//$row = new Row();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>
