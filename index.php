<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Web phụ kiện điện thoại</title>
</head>
<body>
<div class="wrapper">
    <?php include('admincp/config/config.php'); ?>
    <!--    --><?php //include('pages/header.php');?>

    <?php include('pages/menu.php') ?>
    <?php include('pages/main.php') ?>
    <?php include('pages/footer.php'); ?>
</div>
</body>
</html>