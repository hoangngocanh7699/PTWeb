<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh sách sản phẩm</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 500px;">
                        <input type="text" name="table_search" class="form-control float-right"
                               placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Mã SP</th>
                        <th>Giá SP</th>
                        <th>Số Lượng</th>
                        <th>Hình ảnh</th>
                        <th>Danh mục</th>
                        <th>Tóm tắt</th>
                        <th>Tình trạng</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query_lietket_sp = "select * from sanpham, danhmuc where sanpham.id_danhmuc = danhmuc.id_danhmuc";
                    $result_lietket_sp = mysqli_query($mysqli, $query_lietket_sp);
                    $i = 0;
                    while ($row = mysqli_fetch_array($result_lietket_sp)) {
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['tensp']; ?></td>
                            <td><?php echo $row['masp']; ?></td>
                            <td><?php echo $row['giasp']; ?></td>
                            <td><?php echo $row['soluong']; ?></td>
                            <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']; ?>"
                                     style="width: 50px;height: 50px"></td>
                            <td><?php echo $row['tendanhmuc']; ?></td>
                            <td><?php echo $row['tomtat']; ?></td>
                            <td><?php echo ($row['tinhtrang'] == '1') ? 'Kích hoạt' : 'Ẩn' ?></td>
                            <td>
                                <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sp']; ?>"><i
                                            class="fas fa-edit text-warning mr-2" aria-hidden="true"></i></a>
                                <a href="modules/quanlysp/xuly.php?query=xoa&idsanpham=<?php echo $row['id_sp']; ?>"><i
                                            class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                            </td>

                        </tr>
                        <?php
                    } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

