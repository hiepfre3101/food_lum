<?php (getOneDataUser($_SESSION['idUser'])['position'] == 0) ? header("location:index.php?ctr=home") : "" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/style-admin.css">
    <!-- link icon -->
    <link rel="shortcut icon" href="./public/img/logo-Main-9989.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/e6b03d2b34.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wraper">
        <div class="sidebar">
            <div class="logo">
                <a href="?ctr=/">
                    <img src="./public/img/logo.png" alt="">
                </a>
            </div>
            <ul class="menu-item">
                <li class="item <?= ($_GET['ctr'] == '') ? "active-menu" : "" ?>">
                    <span>
                        <span class="material-symbols-outlined">
                            home
                        </span>
                        <a href="?ctr=adminhome">Bảng Điều Khiển</a>
                    </span>
                </li>
                <li class="item <?= ($_GET['ctr'] == 'list-slider') ? "active-menu" : "" ?>">
                    <span>
                        <span class="material-symbols-outlined">
                            photo_library
                        </span>
                        <a href="?ctr=list-slider">Quản lý slider</a>
                    </span>
                </li>
                <li class="item <?= ($_GET['ctr'] == 'list-voucher') ? "active-menu" : "" ?>">
                    <span>
                        <span class="material-symbols-outlined">
                            photo_album
                        </span>
                        <a href="?ctr=list-voucher">Quản lý voucher</a>
                    </span>
                </li>
                <label for="opent-1">
                    <li class="item">
                        <span>
                            <span class="material-symbols-outlined">
                                inventory_2
                            </span>
                            <a>Sản Phẩm</a>
                        </span>
                        <input <?php if ($_GET['ctr'] == 'product-list' || $_GET['ctr'] == 'list-category') echo "checked"; ?> type="checkbox" hidden id="opent-1">
                        <span class="material-symbols-outlined up">
                            expand_more
                        </span>
                        <ul class="sub-menu">
                            <li class="sub-itme <?= ($_GET['ctr'] == 'product-list') ? "active-menu" : "" ?>"><a href="?ctr=product-list">Danh Sách Sản Phẩm</a></li>
                            <li class="sub-itme <?= ($_GET['ctr'] == 'list-category') ? "active-menu" : "" ?>"><a href="?ctr=list-category">Danh Mục Sản Phẩm</a></li>
                        </ul>
                    </li>
                </label>
                <label for="opent-2">
                    <li class="item">
                        <span>
                            <span class="material-symbols-outlined">
                                group
                            </span>
                            <a>Khách Hàng</a>
                        </span>
                        <input <?php if ($_GET['ctr'] == 'user-list' || $_GET['ctr'] == 'add-new-user') echo "checked"; ?> type="checkbox" hidden id="opent-2">
                        <span class="material-symbols-outlined up">
                            expand_more
                        </span>
                        <ul class="sub-menu">
                            <li class="sub-itme <?= ($_GET['ctr'] == 'user-list') ? "active-menu" : "" ?>"><a href="?ctr=user-list">Danh Sách Khách Hàng</a></li>
                            <li class="sub-itme <?= ($_GET['ctr'] == 'add-new-user') ? "active-menu" : "" ?>"><a href="?ctr=add-new-user">Thêm Khách Hàng</a></li>

                        </ul>
                    </li>
                </label>
                <label for="opent-3">
                    <li class="item">
                        <span>
                            <span class="material-symbols-outlined">
                                chat
                            </span>
                            <a>Bình Luận</a>
                        </span>
                        <input <?php if ($_GET['ctr'] == 'comment-list' || $_GET['ctr'] == '') echo "checked"; ?> type="checkbox" hidden id="opent-3">
                        <span class="material-symbols-outlined up">
                            expand_more
                        </span>
                        <ul class="sub-menu">
                            <li class="sub-itme <?= ($_GET['ctr'] == 'comment-list') ? "active-menu" : "" ?>"><a href="?ctr=comment-list">Tất Cả Bình Luận</a></li>
                            <li class="sub-itme <?= ($_GET['ctr'] == '') ? "active-menu" : "" ?>"><a href="">Thống Kê Bình Luận</a></li>
                        </ul>
                    </li>
                </label>
                <label for="opent-4">
                    <li class="item">
                        <span>
                            <span class="material-symbols-outlined">
                                list_alt
                            </span>
                            <a>Đơn Hàng</a>
                        </span>
                        <input <?php if ($_GET['ctr'] == 'list-order' || $_GET['ctr'] == 'list-order-transport') echo "checked"; ?> type="checkbox" hidden id="opent-4">
                        <span class="material-symbols-outlined up">
                            expand_more
                        </span>
                        <ul class="sub-menu">
                            <li class="sub-itme <?= ($_GET['ctr'] == 'list-order') ? "active-menu" : "" ?>"><a href="?ctr=list-order">Đơn Hàng Mới</a></li>
                            <li class="sub-itme <?= ($_GET['ctr'] == 'list-order-transport') ? "active-menu" : "" ?>"><a href="?ctr=list-order-transport">Đơn Hàng Đang Giao</a></li>
                            <li class="sub-itme <?= ($_GET['ctr'] == 'list-order-transport') ? "active-menu" : "" ?>"><a href=" https://sandbox.vnpayment.vn/merchantv2/Users/Login.htm" target="_blank">Quản lí GD VNPAY</a></li>
                        </ul>
                    </li>
                </label>
            </ul>
        </div>
        <div class="box-main">
            <div class="header">
                <div class="search-header">
                    <form action="">
                        <button class="btn" name="btn-search">
                            <span class="material-symbols-outlined">
                                search
                            </span>
                        </button>
                        <input type="text" placeholder="Search here....">
                    </form>
                </div>
                <div class="avatar">
                    <div class="bg-avatar"><img src="<?=getOneDataUser($_SESSION['idUser'])['avatar']?>" alt="">
                    </div>
                    <div class="popup-admin">
                        <p class="username"><?=getOneDataUser($_SESSION['idUser'])['full_name']?></p>
                        <a href="?ctr=logout">Đăng suẩt</a>
                    </div>
                </div>
            </div>