<?php
if (isset($_POST['dangnhap'])) {


    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $query = "select * from dangky where email='" . $email . "' and matkhau='" . md5($matkhau) . "'";
    $result = mysqli_query($mysqli, $query);
    $resultnew = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $resultnew['tenkhachhang'];
        $_SESSION['dangky'] = $resultnew['tenkhachhang'];
        $_SESSION['id_khachhang'] = $resultnew['id_dangky'];

        header('Location: index.php?quanly=giohang');
    } else {
        echo '<script>alert("Tài khoản hoặc mật khẩu không hợp lệ!");</script>';
    }
}
?>

<div class="row">
    <div class="col-8">
        <h2>Đăng nhập</h2>
        <form class="m-2" action="" method="post">
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input name="matkhau" type="password" class="form-control" placeholder="Password">
            </div>
            <button name="dangnhap" type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
    </div>
</div>