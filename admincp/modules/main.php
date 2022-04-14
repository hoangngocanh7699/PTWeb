<?php
if (isset($_GET['action']) && $_GET['query']) {
    $tam = $_GET['action'];
    $query = $_GET['query'];
} else {
    $tam = '';
    $query = '';
}
?>
<!-- Main content -->
<div class="content">
    <?php
    //Danh mục sản phẩm
    if ($tam == 'quanlydanhmucsanpham' && $query == 'them') {
        include('quanlydanhmucsp/them.php');
        include('quanlydanhmucsp/lietke.php');
    } elseif ($tam == 'quanlydanhmucsanpham' && $query == 'sua') {
        include('quanlydanhmucsp/sua.php');

    } //Sản phẩm
    elseif ($tam == 'quanlysanpham' && $query == 'them') {
        include('quanlysp/them.php');
        include('quanlysp/lietke.php');
    } elseif ($tam == 'quanlysanpham' && $query == 'sua') {
        include('quanlysp/sua.php');

    } //Đơn hàng
    elseif ($tam == 'quanlydonhang' && $query == 'lietke') {
        include('quanlydonhang/lietke.php');

    }elseif ($tam == 'quanlydonhang' && $query == 'xemdonhang') {
        include('quanlydonhang/xemdonhang.php');

    } //Dashboard
    else {
        include('dashboard.php');
    }

    ?>
</div><!-- /.container-fluid -->
<?php
?>
