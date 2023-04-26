<?php include "head_html.php" ?>
<?php //ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL); ?>
<body>

<!-- Main content -->
<div class="container">
    <h1 class="text-center fw-bold">Form Thêm mới sản phẩm</h1>

    <form name="frmCreate" method="post" action="" class="form">
        <table class="table">
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="name" id="name" class="form-control"/></td>
            </tr>
            <tr>
                <td>Giá</td>
                <td><input type="number" name="price" id="price" class="form-control"/></td>
            </tr>
            <tr>
                <td>Số lượng</td>
                <td><input type="number" name="amount" id="amount" class="form-control"/></td>
            </tr>
            <tr>
                <td>Ngày nhập</td>
                <td><input type="date" name="date_create" id="date_create" class="form-control"/></td>
            </tr>
            <tr>
                <td>Ghi chú</td>
                <td>
                    <textarea name="note" id="note" class="form-control"></textarea>
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
global $mysqli;
// Truy vấn database
// 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
include_once(__DIR__ . '/connect_db.php');

// 2. Người dùng mới truy cập trang lần đầu tiên (người dùng chưa gởi dữ liệu `btnSave` - chưa nhấn nút Save) về Server
// có nghĩa là biến $_POST['btnSave'] chưa được khởi tạo hoặc chưa có giá trị
// => hiển thị Form nhập liệu

// Nếu biến $_POST['btnSave'] đã được khởi tạo
// => Người dùng đã bấm nút "Lưu dữ liệu"
if (isset($_POST['btnSave'])) {

    // 3. Nếu người dùng có bấm nút `Lưu dữ liệu` thì thực thi câu lệnh INSERT
    // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
    $name = $_POST['name'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $date_create = $_POST['date_create'];
    $note = $_POST['note'];

    // 4. Kiểm tra ràng buộc dữ liệu (Validation)
    // Tạo biến lỗi để chứa thông báo lỗi
    $errors = [];

//    // --- Kiểm tra Mã nhà cung cấp (validate)
//    // required (bắt buộc nhập <=> không được rỗng)
//    if (empty($supplier_code)) {
//        $errors['supplier_code'][] = [
//            'rule' => 'required',
//            'rule_value' => true,
//            'value' => $supplier_code,
//            'msg' => 'Vui lòng nhập mã Nhà cung cấp'
//        ];
//    }
//    // minlength 3 (tối thiểu 3 ký tự)
//    if (!empty($supplier_code) && strlen($supplier_code) < 3) {
//        $errors['supplier_code'][] = [
//            'rule' => 'minlength',
//            'rule_value' => 3,
//            'value' => $supplier_code,
//            'msg' => 'Mã Nhà cung cấp phải có ít nhất 3 ký tự'
//        ];
//    }
//    // maxlength 50 (tối đa 50 ký tự)
//    if (!empty($supplier_code) && strlen($supplier_code) > 50) {
//        $errors['supplier_code'][] = [
//            'rule' => 'maxlength',
//            'rule_value' => 50,
//            'value' => $supplier_code,
//            'msg' => 'Mã Nhà cung cấp không được vượt quá 50 ký tự'
//        ];
//    }

    // --- Kiểm tra Tên nhà cung cấp (validate)
    // required (bắt buộc nhập <=> không được rỗng)
    if (empty($name)) {
        $errors['name'][] = [
            'rule' => 'required',
            'rule_value' => true,
            'value' => $name,
            'msg' => 'Vui lòng nhập tên sản phẩm'
        ];
    }
    // minlength 2 (tối thiểu 2 ký tự)
    if (!empty($name) && strlen($name) < 2) {
        $errors['name'][] = [
            'rule' => 'minlength',
            'rule_value' => 2,
            'value' => $name,
            'msg' => 'Tên sản phẩm phải có ít nhất 3 ký tự'
        ];
    }
    // maxlength 255 (tối đa 255 ký tự)
    if (!empty($name) && strlen($name) > 255) {
        $errors['name'][] = [
            'rule' => 'maxlength',
            'rule_value' => 255,
            'value' => $name,
            'msg' => 'Tên sản phẩm không được vượt quá 255 ký tự'
        ];
    }

    if (empty($price)) {
        $errors['price'][] = [
            'rule' => 'required',
            'rule_value' => true,
            'value' => $price,
            'msg' => 'Vui lòng nhập giá sản phẩm'
        ];
    }

    if (empty($amount)) {
        $errors['amount'][] = [
            'rule' => 'required',
            'rule_value' => true,
            'value' => $amount,
            'msg' => 'Vui lòng nhập số lượng sản phẩm'
        ];
    }

    if (empty($date_create)) {
        $errors['date_create'][] = [
            'rule' => 'required',
            'rule_value' => true,
            'value' => $date_create,
            'msg' => 'Vui lòng nhập ngày nhập sản phẩm'
        ];
    }

    // 5. Thông báo lỗi cụ thể người dùng mắc phải (nếu vi phạm bất kỳ quy luật kiểm tra ràng buộc)
    // dd($errors);
    if (!empty($errors)) {
        // In ra thông báo lỗi
        // kèm theo dữ liệu thông báo lỗi
        foreach ($errors as $errorField) {
            foreach ($errorField as $error) {
                echo $error['msg'] . '<br />';
            }
        }
        return;
    }

    // 6. Nếu không có lỗi dữ liệu sẽ thực thi câu lệnh SQL
    // Câu lệnh INSERT
    $sqlInsert = <<<EOT
        INSERT INTO product (name, price, amount, date_create, note) 
        VALUES ('$name', $price, $amount, '$date_create', '$note')
EOT;

    // Code dùng cho DEBUG
    // var_dump($sqlInsert); die;

    // Thực thi INSERT
    mysqli_query($mysqli, $sqlInsert);

    // Đóng kết nối
    mysqli_close($mysqli);

    // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
    header('location:list.php');
}
?>
</body>