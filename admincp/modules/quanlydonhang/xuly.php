<?php
include ('../../config/config.php');
if (isset($_GET['cart_status']) && $_GET['cart_status'] == '0') {
    $query = "update cart set cart_status = 0 where code_cart=" . $_GET['cart_code'] . "";

    $result = mysqli_query($mysqli, $query);
    if ($result)
        header('Location: ../../index.php?action=quanlydonhang&query=lietke');
}
