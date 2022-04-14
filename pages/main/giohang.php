<h2> <?php echo (isset($_SESSION['dangky']) && isset($_SESSION['id_khachhang'])) ? 'Xin chào: ' . $_SESSION['dangky'] . ' ID: ' . $_SESSION['id_khachhang'] : '' ?>
    </h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Mã SP</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Giá SP</th>
        <th scope="col">Thành tiền</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <?php
    $tongtien = 0;
    if (isset($_SESSION['cart'])) {
    ?>
    <tbody>
    <?php foreach ($_SESSION['cart'] as $id => $cart_item) {
        $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];

        $tongtien += $thanhtien;
        ?>
        <tr>
            <td><?php echo $cart_item['masp']; ?></td>
            <td><?php echo $cart_item['tensp']; ?></td>
            <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>"
                     style="width: 5rem"></td>
            <td class="cart_quantity_button">
                <a class="cart_quantity_up" href="pages/main/themgiohang.php?cong=<?php echo $id ?>"> + </a>

                <input type="text" class="cart_quantity_input" value="<?php echo $cart_item['soluong']; ?>" size="2">
                <a class="cart_quantity_down" href="pages/main/themgiohang.php?tru=<?php echo $id ?>"> - </a>
            </td>
            <td><?php echo number_format($cart_item['giasp'], 0, ',', '.') ?> VND</td>
            <td><?php echo number_format($thanhtien, 0, ',', '.'); ?> VND</td>
            <td><a href="pages/main/themgiohang.php?xoa=<?php echo $id ?>" class="btn btn-danger">Xóa</a></td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="7">
            <h1 class="text-uppercase">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') ?> VND<a
                        href="pages/main/themgiohang.php?xoatatca=1" class="btn btn-danger float-right">Xóa
                    tất cả</a></h1>
        </td>
    </tr>
    <tr>
        <td colspan="7">
            <?php
            if (isset($_SESSION['dangky']) || isset($_SESSION['dangnhap'])) {
                ?>
                <a href="index.php?quanly=thanhtoan" class="btn btn-info">Thanh toán</a>
                <?php
            } else {
                ?>
                <a href="index.php?quanly=dangky" class="btn btn-info">Bạn phải đăng nhập hoặc đăng ký để thanh toán</a>

                <?php
            }
            ?>

        </td>
    </tr>

    <?php
    } else {
        ?>
        <td colspan="7"><h1>Giỏ hàng trống</h1></td>

        <?php
    }
    ?>
    </tbody>
</table>
