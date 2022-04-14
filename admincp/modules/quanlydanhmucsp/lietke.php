<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh sách danh mục</h3>
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
                        <th>Tên danh mục</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query_lietket_danhmucsp = "select * from danhmuc order by  thutu DESC";
                    $result_lietket_danhmucsp = mysqli_query($mysqli, $query_lietket_danhmucsp);
                    $i = 0;
                    while ($row = mysqli_fetch_array($result_lietket_danhmucsp)) {
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['tendanhmuc']; ?></td>
                            <td>
                                <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']; ?>"><i
                                            class="fas fa-edit text-warning mr-2" aria-hidden="true"></i></a>
                                <a href="modules/quanlydanhmucsp/xuly.php?query=xoa&iddanhmuc=<?php echo $row['id_danhmuc']; ?>"><i
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

