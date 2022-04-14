<?php
include('../../config/config.php');

$tendanhmuc = $_POST['tendanhmuc'];
$sothutu = $_POST['sothutu'];


if (isset($_POST['themdanhmuc'])) {
    $query_them = "INSERT INTO danhmuc(tendanhmuc, thutu) values('" . $tendanhmuc . "', '." . $sothutu . ".')";
    mysqli_query($mysqli, $query_them);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
} elseif (isset($_POST['suadanhmuc'])) {
    $query_sua = "UPDATE danhmuc set tendanhmuc='" . $tendanhmuc . "',thutu='" . $sothutu . "' where id_danhmuc=" . $_GET['iddanhmuc'] . "";
    mysqli_query($mysqli, $query_sua);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
} elseif ($_GET['query'] == 'xoa') {
    $id_danhmuc = $_GET['iddanhmuc'];
    $query_xoa = "delete from danhmuc where id_danhmuc=" . $id_danhmuc . "";
    mysqli_query($mysqli, $query_xoa);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}

