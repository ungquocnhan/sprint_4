<?php include 'head_html.php' ?>

<body>
<div class="container">
    <h1 class="text-center fw-bold">Danh sách sản phẩm</h1>
    <?php
    global $mysqli;
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    include_once(__DIR__."/connect_db.php");
    if (isset($_GET['search'])){
        $nameSearch = $_GET['search'];
    }else {
        $nameSearch = '';
    }

    // 2. Chuẩn bị câu truy vấn $sql
    $sql = "select * from product where name like '%$nameSearch%'";
//    $sql = "select * from product";
    // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
    $result = mysqli_query($mysqli, $sql);
    // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tách để sử dụng
    // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
    // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
    $data = [];
    $rowNum = 1;
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = array(
            'rowNum' => $rowNum,// sử dụng biến tự tăng để làm dữ liệu cột STT
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'amount' => $row['amount'],
            'date_create' => $row['date_create'],
            'note' => $row['note'],
        );
        $rowNum++;
    }
    ?>

    <!-- Button Thêm mới -->
    <a href="create.php" class="btn btn-primary mb-2">
        <i class="fas fa-plus"></i> Thêm mới
    </a>
    <a href="home.php" class="btn btn-primary mb-2">
        <i class="fas fa-home"></i> Home
    </a>

    <div>
        <form action="" method="get" name="formSearch" class="form">
            <div class="justify-content-center">
                <div class="row">
                    <div class="col-10">
                        <input type="text" name="search" id="search" class="form-control">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-success mb-2">
                            <i class="fas fa-search"></i>Tìm kiếm
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th class="text-center" style="width: 2%">STT</th>
            <th class="text-center" style="width: 10%">Name</th>
            <th class="text-center" style="width: 4%">Price</th>
            <th class="text-center" style="width: 2%">Amount</th>
            <th class="text-center" style="width: 8%">Date Create</th>
            <th class="text-center" style="width: 10%">Note</th>
            <th class="text-center" style="width: 2%">Edit</th>
            <th class="text-center" style="width: 2%">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $row) : ?>
        <tr>
            <td class="text-center"><?php echo $row['rowNum']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td class="text-end"><?php echo $row['price']; ?></td>
            <td class="text-center"><?php echo $row['amount']; ?></td>
            <td class="text-center"><?php echo date("d/m/Y", strtotime($row['date_create'])); ?></td>
            <td><?php echo $row['note']; ?></td>
            <td class="text-center">
                <!-- Button Sửa -->
                <a href="edit.php?id=<?php echo $row['id'] ?>" id="btnUpdate" class="btn btn-primary">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td class="text-center">
                <!-- Button Xóa -->
                <a href="delete.php?id=<?php echo $row['id']?>" id="btnDelete" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>

