<?php
include('../../config/config.php');

$tensanpham = $_POST['tensp'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluongsp'];
$tomtat = $_POST['tomtatsp'];
$noidung = $_POST['noidungsp'];
$tinhtrangsp = $_POST['tinhtrangsp'];
$id_danhmuc = $_POST['id_danhmuc'];

//Xu ly hinh anh
$hinhanh = $_FILES['hinhanhsp']['name'];
$hinhanh_tmp = $_FILES['hinhanhsp']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;
//Them san pham
if (isset($_POST['themsanpham'])) {
    $query_them = "INSERT INTO sanpham(tensp, masp, giasp, soluong, hinhanh, tomtat, noidung, tinhtrang, id_danhmuc) " .
        "values('" . $tensanpham . "', '" . $masp . "', '" . $giasp . "'," . $soluong . ",'" . $hinhanh . "','" . $tomtat . "','" . $noidung . "', " . $tinhtrangsp . ", " . $id_danhmuc . ")";
    mysqli_query($mysqli, $query_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}//Sua san pham
elseif (isset($_POST['suasanpham'])) {
    if (isset($_FILES['hinhanhsp']) && $_FILES['hinhanhsp']['tmp_name'] != '') {
        move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
        $query_sua = "update sanpham set  id_danhmuc=" . $id_danhmuc . ", giasp=" . $giasp . ", tensp='" . $tensanpham . "', masp='" . $masp . "', soluong=" . $soluong . ", hinhanh='" . $hinhanh . "', tomtat='" . $tomtat . "', noidung='" . $noidung . "', tinhtrang='" . $tinhtrangsp . "' where id_sp=" . $_GET['idsanpham'] . "";
    } else {
        $query_sua = "update sanpham set  id_danhmuc=" . $id_danhmuc . ", giasp=" . $giasp . ",tensp='" . $tensanpham . "', masp='" . $masp . "', soluong=" . $soluong . ", tomtat='" . $tomtat . "', noidung='" . $noidung . "', tinhtrang='" . $tinhtrangsp . "' where id_sp=" . $_GET['idsanpham'] . "";
    }
    mysqli_query($mysqli, $query_sua);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}//Xoa san pham
elseif ($_GET['query'] == 'xoa') {
    $id_sanpham = $_GET['idsanpham'];
    $query_xoa_anh = "select * from sanpham where id_sp=" . $id_sanpham . "";
    $result_xoa_anh = mysqli_query($mysqli, $query_xoa_anh);
    while ($row = mysqli_fetch_array($result_xoa_anh)) {
        if ($row['hinhanh'] != '')
            unlink('uploads/' . $row['hinhanh']);
    }
    $query_xoa = "delete from sanpham where id_sp=" . $id_sanpham . "";
    mysqli_query($mysqli, $query_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}

