<?php
include('admincp/config/config.php');


$id_khachhang = $_SESSION['id_khachhang'];
$code_cart = rand(0, 9999);
$query = "INSERT INTO  cart(id_khachhang,code_cart,cart_status) values (" . $id_khachhang . "," . $code_cart . ",1)";

$insert_cart = mysqli_query($mysqli, $query);

if ($insert_cart) {
    //them cart details
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sp = $key;
        $soluong = $value['soluong'];
        $query = "INSERT INTO cart_details(id_sanpham,code_cart,soluong) values(" . $id_sp . "," . $code_cart . "," . $soluong . ")";

        mysqli_query($mysqli, $query);
    }
}
unset($_SESSION['cart']);
header('Location: index.php?quanly=camon');
