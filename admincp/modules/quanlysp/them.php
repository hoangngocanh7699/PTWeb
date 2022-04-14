<div class="row">
    <div class="col-6">
        <h2>Thêm sản phẩm</h2>
        <form action="modules/quanlysp/xuly.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input name="tensp" type="text" class="form-control" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
                <label>Mã SP</label>
                <input name="masp" type="text" class="form-control" placeholder="Nhập Mã SP">
            </div>
            <div class="form-group">
                <label>Giá SP</label>
                <input name="giasp" type="number" class="form-control" placeholder="Nhập Giá SP">
            </div>
            <div class="form-group">
                <label>Số lượng</label>
                <input name="soluongsp" type="number" class="form-control" placeholder="Nhập số lượng">
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input name="hinhanhsp" type="file" class="form-control">
            </div>
    </div>
    <div class="col-6">


        <div class="form-group">
            <label>Tóm tắt</label>
        </div>
        <div class="form-group">
            <textarea name="tomtatsp" cols="83" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Nội dung</label>
        </div>
        <div class="form-group">
            <textarea name="noidungsp" cols="83" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Danh mục sản phẩm</label>
            <select name="id_danhmuc" class="form-control">
                <?php
                $query_danhmuc = "select * from danhmuc order by id_danhmuc desc";
                $reslut_danhmuc = mysqli_query($mysqli, $query_danhmuc);
                while ($row = mysqli_fetch_array($reslut_danhmuc)) {
                    ?>
                    <option value="<?php echo $row['id_danhmuc']; ?>"><?php echo $row['tendanhmuc']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tình trạng</label>
            <select name="tinhtrangsp" class="form-control">
                <option value="1">Kích hoạt</option>
                <option value="0">Ẩn</option>
            </select>
        </div>

        <button type="submit" name="themsanpham" class="btn btn-primary">Thêm</button>
        </form>
    </div>

</div>


