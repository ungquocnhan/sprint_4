<?php
namespace Html;
class Table {
    public string $title = "";
    public int $numRows = 0;
    public function message(): void
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
class Row {
    public int $numCells = 0;
    public function message(): void
    {
        echo "<p>The row has {$this->numCells} cells.</p>";
    }
}

$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html lang="en">
<body>

<?php
$table->message();
?>

</body>
</html>
