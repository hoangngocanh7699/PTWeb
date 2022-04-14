<?php
if (isset($_GET['action']) && $_GET['action'] == 'dangxuat') {
    unset($_SESSION['dangnhap']);
    header('Location: login.php');
}
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="index.php"
                   class="d-block"><?php echo(isset($_SESSION['dangnhap']) ? $_SESSION['dangnhap'] : 'Unknoww') ?></a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="index.php?action=quanlydanhmucsanpham&query=them" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quản lý danh mục sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?action=quanlysanpham&query=them" class="nav-link">
                        <i class="fab fa-product-hunt"></i>
                        <p>
                            Quản lý sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?action=quanlydonhang&query=lietke" class="nav-link">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <p>
                            Quản lý đơn hàng
                        </p>
                    </a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a href="index.php?action=quanlybaiviet&query=them" class="nav-link">-->
<!--                        <i class="nav-icon fas fa-th"></i>-->
<!--                        <p>-->
<!--                            Quản lý bài viết-->
<!--                        </p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a href="index.php?action=quanlydanhmucbaiviet&query=them" class="nav-link">-->
<!--                        <i class="nav-icon fas fa-th"></i>-->
<!--                        <p>-->
<!--                            Quản lý danh mục bài viết-->
<!--                        </p>-->
<!--                    </a>-->
<!--                </li>-->
                <li class="nav-item">
                    <a href="index.php?action=dangxuat" class="nav-link">
                        <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                        <p>
                            Đăng xuất
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>