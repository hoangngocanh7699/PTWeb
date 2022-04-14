<?php
if (isset($_POST['dangky'])) {
    $hovaten = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];
    $matkhau = $_POST['matkhau'];
    $query = "INSERT INTO dangky (id_dangky, tenkhachhang, email, diachi, matkhau, dienthoai) VALUES (NULL, '" . $hovaten . "', '" . $email . "', '" . $diachi . "', '" . md5($matkhau) . "', '" . $dienthoai . "');";
    $result = mysqli_query($mysqli, $query);
    if ($result) {
        $_SESSION['dangky'] = $hovaten;
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);

        echo '<p class="text-success">Đăng ký thành công!</p>';
        echo '<a href="index.php?quanly=giohang">Quay lại giỏ hàng để thanh toán</a>';
    }
}
?>
<div class="row">
    <div class="col-8">
        <h2>Đăng ký & đăng nhập</h2>
        <form class="m-2" action="" method="post">
            <div class="form-group">
                <label>Họ và tên</label>
                <input name="hovaten" type="text" class="form-control" placeholder="Họ tên">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Điện thoại</label>
                <input name="dienthoai" type="text" class="form-control" placeholder="Điện thoại">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input name="diachi" type="text" class="form-control" placeholder="Địa chỉ">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input name="matkhau" type="password" class="form-control" placeholder="Password">
            </div>

            <button name="dangky" type="submit" class="btn btn-primary">Đăng ký</button>
            <a href="index.php?quanly=dangnhap" class="btn btn-primary">Đăng nhập nếu có tài khoản</a>
        </form>
    </div>
</div>