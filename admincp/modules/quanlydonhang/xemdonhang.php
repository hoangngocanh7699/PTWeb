<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Chi tiết đơn hàng: <?php echo $_GET['code_cart'] ?></h3>
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
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query_chitiet_donhang = "select cd.code_cart, sp.tensp, cd.soluong, sp.giasp from cart_details cd, sanpham sp where " .
                        "cd.id_sanpham = sp.id_sp and cd.code_cart=" . $_GET['code_cart'] . "";
                    $result_chitiet_donhang = mysqli_query($mysqli, $query_chitiet_donhang);

                    $i = 0;
                    $tongtien = 0;
                    while ($row = mysqli_fetch_array($result_chitiet_donhang)) {
                        $i++;
                        $tongtien += $row['soluong'] * $row['giasp'];
                        $code_cart = $row['code_cart'];
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['code_cart']; ?></td>
                            <td><?php echo $row['tensp']; ?></td>
                            <td><?php echo $row['soluong']; ?></td>
                            <td><?php echo number_format($row['giasp'], 0, ',', '.') ?> VND</td>
                            <td><?php echo number_format($row['soluong'] * $row['giasp'], 0, ',', '.') ?> VND</td>


                        </tr>
                        <?php
                    } ?>
                    <tr>
                        <td colspan="5">
                            <h2 class="text-uppercase">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') ?>
                                VND</h2>
                        </td>
                        <td>
                            <?php
                            $query = "select * from cart where code_cart =" . $code_cart . "";
                            $result = mysqli_query($mysqli, $query);
                            $result = mysqli_fetch_array($result);
                            if ($result['cart_status'] == '1') {
                                ?>
                                <a href="modules/quanlydonhang/xuly.php?cart_status=0&cart_code=<?php echo $code_cart ?>"
                                   class="btn btn-success">Xác nhận đơn hàng</a>
                                <?php
                            } else {
                                ?>
                                <a href="javascript:void(0)"
                                   class="btn btn-success">Đơn hàng đã được xác nhận</a>
                                <?php
                            }
                            ?>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

