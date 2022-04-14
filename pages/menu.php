<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Trang chủ</a>
                </li>
                <!-- <?php
                $query_danhmuc = "select * from danhmuc order by id_danhmuc desc";
                $reslut_danhmuc = mysqli_query($mysqli, $query_danhmuc);
                while ($row = mysqli_fetch_array($reslut_danhmuc)) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']; ?>"><?php echo $row['tendanhmuc']; ?></a>
                    </li>
                <?php } ?> -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?quanly=giohang">Giỏ hàng</a>
                </li>
                <?php
                if (!isset($_SESSION['dangky']) && !isset($_SESSION['dangnhap'])) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=dangky">Đăng ký & đăng nhập</a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?dangxuat=1">Đăng xuất</a>
                    </li>
                    <?php
                }
                if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == '1') {
                    unset($_SESSION['dangky']);
                    unset($_SESSION['dangnhap']);
                    header('Location: index.php');
                }

                ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?quanly=tintuc">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?quanly=lienhe">Liên hệ</a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0" action="index.php?quanly=timkiem" method="POST">
                <input name="tukhoa" class="form-control mr-sm-2" type="search" placeholder="Search"
                       aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>