<?php
$query_sua_danhmucsp = "select * from danhmuc where id_danhmuc=" . $_GET['iddanhmuc'] . "";
$result_sua_danhmucsp = mysqli_query($mysqli, $query_sua_danhmucsp);
?>
<div class="row">
    <div class="col-6">
        <h2>Sửa danh mục sản phẩm</h2>
        <form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']; ?>" method="post">
            <?php
            while ($row = mysqli_fetch_array($result_sua_danhmucsp)) {
                ?>
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input name="tendanhmuc" type="text" class="form-control" placeholder="Nhập tên danh mục"
                           value="<?php echo $row['tendanhmuc']; ?>">
                </div>
                <div class="form-group">
                    <label>Số thứ tự</label>
                    <input name="sothutu" type="number" class="form-control" placeholder="Nhập STT"
                           value="<?php echo $row['thutu']; ?>">
                </div>
            <?php } ?>
            <button type="submit" name="suadanhmuc" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</div>


