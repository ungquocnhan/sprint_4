<?php include 'head_html.php' ?>
<body>
<?php
global $mysqli;
include_once(__DIR__ . '/connect_db.php');

$id = $_GET['id'];
$sqlSelect = "SELECT * FROM product WHERE id = $id";

$resultSelect = mysqli_query($mysqli, $sqlSelect);
$selectRow = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC);
print_r($selectRow);
if (empty($selectRow)) {
    echo "Giá trị id: $id không tồn tại. Vui lòng kiểm tra lại.";
    die;
}
?>

<div class="container">
    <h1 class="text-center fw-bold">Form Cập nhật sản phẩm</h1>
    <form name="frmEdit" id="frmEdit" method="post" action="" class="form">
        <table class="table">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id" id="id" class="form-control" value="<?php echo $selectRow['id'] ?>" readonly /></td>
            </tr>
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="name" id="name" class="form-control" value="<?php echo $selectRow['name'] ?>"/></td>
            </tr>
            <tr>
                <td>Giá</td>
                <td><input type="number" name="price" id="price" class="form-control" value="<?php echo $selectRow['price'] ?>"/></td>
            </tr>
            <tr>
                <td>Số lượng</td>
                <td><input type="number" name="amount" id="amount" class="form-control" value="<?php echo $selectRow['amount'] ?>"/></td>
            </tr>
            <tr>
                <td>Ngày nhập</td>
                <td><input type="date" name="date_create" id="date_create" class="form-control" value="<?php echo $selectRow['date_create'] ?>"/></td>
            </tr>
            <tr>
                <td>Ghi chú</td>
                <td>
                    <textarea name="note" id="note" class="form-control"><?php echo $selectRow['note'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Lưu dữ liệu</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<?php
if (isset($_POST['btnSave'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $date_create = $_POST['date_create'];
    $note = $_POST['note'];
    $sql = "UPDATE product SET name = '$name', price = $price, amount = $amount, date_create = '$date_create', note = '$note' WHERE id = $id";
    mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    mysqli_close($mysqli);
    echo "<script>window.location.href='list.php';</script>";
}
?>


</body>
