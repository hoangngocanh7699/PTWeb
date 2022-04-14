<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh sách đơn hàng</h3>
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
                        <th>STT</th>
                        <th>Mã đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Số ĐT</th>
                        <th>Tình trạng</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query_lietket_donhang = "select * from cart, dangky where " .
                        "cart.id_khachhang = dangky.id_dangky";
                    $result_lietket_donhang = mysqli_query($mysqli, $query_lietket_donhang);
                    $i = 0;
                    while ($row = mysqli_fetch_array($result_lietket_donhang)) {
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['code_cart']; ?></td>
                            <td><?php echo $row['tenkhachhang']; ?></td>
                            <td><?php echo $row['diachi']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['dienthoai']; ?></td>
                            <td><?php echo ($row['cart_status'] =='0')?'Đã xác nhận <i class="fa fa-check text-success" aria-hidden="true"></i>':'Mới <i class="fa fa-exclamation-triangle text-warning" aria-hidden="true"></i>' ?></td>
                            <td>
                                <a href="index.php?action=quanlydonhang&query=xemdonhang&code_cart=<?php echo $row['code_cart']; ?>"><i
                                            class="fa fa-eye" aria-hidden="true"></i></a>
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

