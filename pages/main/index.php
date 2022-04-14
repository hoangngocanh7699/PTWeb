<?php
if (isset($_GET['trang'])) {
    $trang = $_GET['trang'];
} else {
    $trang = '';
}
if ($trang == '' || $trang == 1) {
    $begin = 0;
} else {
    $begin = ($trang * 5) - 5;
}
$query = "select * from sanpham limit " . $begin . ",5";
$result = mysqli_query($mysqli, $query);
?>
<div class="row">
    <ul class="mt-4">
        <h5>Sản phẩm mới nhất</h5>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <li class="card">
                <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sp'] ?>">
                    <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['tensp'] ?></h5>
                        <p class="card-text">Giá: <?php echo number_format($row['giasp'], 0, ',', '.') ?> VND</p>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="row d-flex justify-content-center mt-5">
    <?php
    $query = "select * from sanpham";
    $row = mysqli_num_rows(mysqli_query($mysqli, $query));
    $trang = ceil($row / 5); //làm tròn số khi chia cho 5, chia mỗi trang 5 sp
    ?>
    <ul class="pagination">
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <?php
        if (isset($_GET['trang'])) {
            $page = $_GET['trang'];
        } else {
            $page = 0;
        }
        for ($i = 1; $i <= $trang; $i++) {
            ?>
            <li class="page-item <?php echo ($page == $i) ? 'active' : '' ?> "><a class="page-link "
                                                                                href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a>
            </li>
            <?php
        }
        ?>
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>

</div>
