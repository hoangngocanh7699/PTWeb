<?php
$query_sanpham_id = "select * from sanpham, danhmuc where sanpham.id_danhmuc=danhmuc.id_danhmuc and id_sp=" . $_GET['id'] . "";
$result_sanpham_id = mysqli_query($mysqli, $query_sanpham_id);
while ($row = mysqli_fetch_array($result_sanpham_id)) {
    ?>
    <form action="pages/main/themgiohang.php?idsanpham=<?php echo $row['id_sp'] ?>" method="post">
    <div class="row m-3">
        <div class="col-4">
            <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']; ?>"
                 style="width: 250px;">
        </div>
        <div class="col-8">
            <p>Tên SP: <?php echo $row['tensp']; ?></p>
            <p>Giá: <?php echo number_format($row['giasp'], 0, ',', '.') ?> VND</p>
            <p>Số lượng: <?php echo $row['soluong']; ?></p>
            <p>Danh mục SP: <?php echo $row['tendanhmuc']; ?></p>
            <button type="submit" class="btn btn-primary" name="themgiohang">Add to cart</button>
        </div>
    </div>
    </form>
<?php } ?>