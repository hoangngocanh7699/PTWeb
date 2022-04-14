<?php
$tukhoa = $_POST['tukhoa'];
$query_sanpham = "select * from sanpham where tensp like '%" . $tukhoa . "%'";
$result_sanpham = mysqli_query($mysqli, $query_sanpham);

?>
<ul class="mt-4">
    <h5>Kết quả cho: <?php echo $tukhoa; ?></h5>
    <?php while ($row_pro = mysqli_fetch_array($result_sanpham)) { ?>
        <li class="card">
            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sp'] ?>">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']; ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tên SP: <?php echo $row_pro['tensp'] ?></h5>
                    <p class="card-text text-danger">Giá: <?php echo number_format($row_pro['giasp'], 0, ',', '.') ?>
                        VND</p>

                </div>
            </a>
        </li>
    <?php } ?>
</ul>
