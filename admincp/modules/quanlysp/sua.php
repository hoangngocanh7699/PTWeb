<?php
$query_sua_sp = "select * from sanpham, danhmuc where sanpham.id_danhmuc = danhmuc.id_danhmuc and id_sp=" . $_GET['idsanpham'] . "";
$result_sua_sp = mysqli_query($mysqli, $query_sua_sp);
?>
<div class="row">
    <div class="col-6">
        <h2>Sửa sản phẩm</h2>
        <?php
        while ($row = mysqli_fetch_array($result_sua_sp)){
        ?>
        <form action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sp']; ?>" method="post"
              enctype="multipart/form-data">

            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input name="tensp" type="text" class="form-control" placeholder="Nhập tên sản phẩm"
                       value="<?php echo $row['tensp']; ?>">
            </div>
            <div class="form-group">
                <label>Mã SP</label>
                <input name="masp" type="text" class="form-control" placeholder="Nhập Mã SP"
                       value="<?php echo $row['masp']; ?>">
            </div>
            <div class=" form-group">
                <label>Giá SP</label>
                <input name="giasp" type="number" class="form-control" placeholder="Nhập Giá SP"
                       value="<?php echo $row['giasp']; ?>">
            </div>
            <div class=" form-group">
                <label>Số lượng</label>
                <input name="soluongsp" type="number" class="form-control" placeholder="Nhập số lượng"
                       value="<?php echo $row['soluong']; ?>">
            </div>
            <div class=" form-group">
                <label>Hình ảnh</label>
                <input name="hinhanhsp" type="file" class="form-control">
                <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']; ?>" style="width: 150px;height: 150px">
            </div>
            <div class="form-group">
                <label>Tóm tắt</label>
            </div>
            <div class="form-group">
                <textarea name="tomtatsp" cols="83" rows="5"><?php echo $row['tomtat']; ?></textarea>
            </div>
            <div class="form-group">
                <label>Nội dung</label>
            </div>
            <div class="form-group">
                <textarea name="noidungsp" cols="83" rows="5"><?php echo $row['noidung']; ?></textarea>
            </div>
            <div class="form-group">
                <label>Danh mục sản phẩm</label>
                <select name="id_danhmuc" class="form-control">
                    <?php
                    $query_danhmuc = "select * from danhmuc order by id_danhmuc desc";
                    $reslut_danhmuc = mysqli_query($mysqli, $query_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($reslut_danhmuc)) {
                        if ($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']) {
                            ?>
                            <option selected
                                    value="<?php echo $row_danhmuc['id_danhmuc']; ?>"><?php echo $row_danhmuc['tendanhmuc']; ?></option>
                        <?php } else {
                            ?>
                            <option
                                    value="<?php echo $row_danhmuc['id_danhmuc']; ?>"><?php echo $row_danhmuc['tendanhmuc']; ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tình trạng</label>
                <select name="tinhtrangsp" class="form-control">
                    <?php if ($row['tinhtrang'] == 1) { ?>
                        <option value="1" selected>Kích hoạt</option>
                        <option value="0">Ẩn</option>
                    <?php } ?>
                    <?php if ($row['tinhtrang'] == 0) { ?>
                        <option value="1">Kích hoạt</option>
                        <option value="0" selected>Ẩn</option>
                    <?php } ?>
                </select>
            </div>
            <?php } ?>
            <button type="submit" name="suasanpham" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</div>


