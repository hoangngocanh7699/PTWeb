<?php
$query_sanpham = "select * from sanpham,danhmuc where sanpham.id_danhmuc = danhmuc.id_danhmuc and sanpham.id_danhmuc = " . $_GET['id'] . "";
$result_sanpham = mysqli_query($mysqli, $query_sanpham);

$query_sanpham_title = "select * from sanpham,danhmuc where sanpham.id_danhmuc = danhmuc.id_danhmuc and sanpham.id_danhmuc = " . $_GET['id'] . "";
$result_sanpham_title = mysqli_query($mysqli, $query_sanpham_title);
$row_title = mysqli_fetch_array($result_sanpham_title);
?>
<ul class="mt-4">
    <h5 class="text-uppercase">Danh mục sản phẩm: <?php echo $row_title['tendanhmuc']; ?></h5>
    <?php while ($row_pro = mysqli_fetch_array($result_sanpham)) { ?>
        <li class="card">
            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sp'] ?>">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']; ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row_pro['tensp'] ?></h5>
                    <p class="card-text text-danger"><?php echo number_format($row_pro['giasp'], 0, ',', '.') ?>
                        VND</p>

                </div>
            </a>
        </li>
    <?php } ?>
</ul>