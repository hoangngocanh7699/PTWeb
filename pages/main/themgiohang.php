<?php session_start();
include('../../admincp/config/config.php');
if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    $cart = '';
    $cart = $_SESSION['cart']; // lấy giá trị trong session để thêm quantity
    if (isset($cart[$id])) {
        $_SESSION['cart'][$id]['soluong'] = $cart[$id]['soluong'] + 1;
    }
    header('Location: ../../index.php?quanly=giohang');
}
if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    $cart = '';
    $cart = $_SESSION['cart']; // lấy giá trị trong session để thêm quantity
    if (isset($cart[$id])) {
        $_SESSION['cart'][$id]['soluong'] = $cart[$id]['soluong'] - 1;
    }
    if ($_SESSION['cart'][$id]['soluong'] == 0) {
        unset($_SESSION['cart'][$id]);
    }
    header('Location: ../../index.php?quanly=giohang');
}

if (isset($_GET['xoa']) && isset($_SESSION['cart'])) {
    $id = $_GET['xoa'];
    $cart = '';
    $cart = $_SESSION['cart'];
    if (isset($cart[$id])) {
        unset($_SESSION['cart'][$id]);
    }
    header('Location: ../../index.php?quanly=giohang');
}

if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['cart']);
    header('Location: ../../index.php?quanly=giohang');
}

if (isset($_POST['themgiohang'])) {
//    session_destroy();
    $id = $_GET['idsanpham'];
    $query = "select * from sanpham  where id_sp=" . $id . "";
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_array($result);

    $cart = '';
    $cart = $_SESSION['cart']; // lấy giá trị trong session để thêm quantity
    if (isset($cart[$id])) {
        $cart[$id]['soluong'] = $cart[$id]['soluong'] + 1;
    } else {
        $cart[$id] = [
            'tensp' => $row['tensp'],
            'soluong' => 1,
            'giasp' => $row['giasp'],
            'hinhanh' => $row['hinhanh'],
            'masp' => $row['masp']
        ];
    }
// Tạo session với key => value
    $_SESSION['cart'] = $cart;

    header('Location: ../../index.php?quanly=giohang');
}