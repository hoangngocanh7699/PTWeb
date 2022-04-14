<!-- The sidebar -->
<div class="sidebar bg-light border">
    <?php
    $query_danhmuc = "select * from danhmuc order by id_danhmuc desc";
    $reslut_danhmuc = mysqli_query($mysqli, $query_danhmuc);
    while ($row = mysqli_fetch_array($reslut_danhmuc)) {
        ?>
        <a class="nav-link"
           href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']; ?>"><?php echo $row['tendanhmuc']; ?></a>
    <?php } ?>
</div>