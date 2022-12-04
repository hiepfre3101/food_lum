<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodlum</title>
    <script src="https://kit.fontawesome.com/e6b03d2b34.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="shortcut icon" href="./public/img/logo-Main-9989.png" type="image/x-icon">
    <!--    link gg icon -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>

</head>
<body onload="loadTotal()">
<nav class="navbar navbar-expand-lg  container-fluid px-lg-5 py-lg-4 bg-white " id="header-menu">
    <div class="container-fluid">
        <a class="navbar-brand w-10 d-flex justify-content-center " href="?ctr=home"><img
                    src="./public/img/logo.png" alt="logo" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end navbar-collapse ms-5 justify-content-between" id="offcanvasNavbar"
             tabindex="-1" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header w-100 d-lg-none d-flex justify-content-between border-b-gray py-3">
                <h1 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">DANH MỤC</h1>
                <div class="d-block d-lg-none">
                    <a href="#" class="text-dark text-decoration-none fw-semibold">Đăng nhập</a>/
                    <a href="#" class="text-dark text-decoration-none fw-semibold">Đăng ký</a> ->
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body w-100">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3 d-flex justify-content-between mb-5 mb-lg-0 py-5 py-lg-0 nav-sm">
                        <a class="py-5 py-lg-0 nav-link text-upercase fw-bold fs-2 text-dark header-link"
                           aria-current="page" href="?ctr=menu">Thực đơn</a>
                        <img src="./public/img/slider3.jpg" alt="..." class="d-lg-none w-30 rounded-3 ms-3">
                    </li>
                    <li class="nav-item me-3  d-flex justify-content-between mb-5 mb-lg-0 py-5 py-lg-0 nav-sm">
                        <a class="py-5 py-lg-0 nav-link text-upercase fw-bold fs-2 text-dark header-link"
                           aria-current="page" href="?ctr=voucher">Khuyến mãi</a>
                        <img src="./public/img/slider3.jpg" alt="..." class="d-lg-none w-30 rounded-3 ms-3">
                    </li>
                </ul>
                <div class="w-50 d-lg-flex d-none d-lg-block" style="height:30px;">
                    <a href="?ctr=user-profile" class="d-block">
                        <div class="fa-solid fa-circle-user fs-1 px-3 d-none d-lg-block text-dark icon-user position-relative"
                             role="button">
                            <div class="menu-child  bg-primary position-absolute p-3">
                                <!--său khi đăng nhập -->
                                <?php if (isset($_SESSION['idUser'])) { ?>
                                    <p style="font-size: 20px"><?= getOneDataUser($_SESSION['idUser'])['user_name'] ?></p>
                                    <a href="?ctr=user-profile" class="text-dark fs-4 fw-semibold link-child">Hồ sơ của
                                        bạn</a>
                                    <?php if (getOneDataUser($_SESSION['idUser'])['position'] == 1) { ?>
                                        <a href="?ctr=product-list" class="text-dark fs-4 fw-semibold link-child">Đến trang quản trị</a>
                                    <?php } ?>
                                    <a href="?ctr=logout" class="text-dark fs-4 fw-semibold link-child">Đăng xuất</a>
                                <?php } else { ?>
                                    <a href="?ctr=login" class="text-dark fs-4 fw-semibold link-child">Đăng nhập</a>
                                    <a href="?ctr=sign-up" class="text-dark fs-4 fw-semibold link-child">Đăng kí</a>
                                <?php } ?>
                            </div>
                        </div>
                    </a>
                    <a href="?ctr=cart" class="d-none d-lg-block">
                        <i class="fa-solid fa-burger fs-1 cart text-dark" role="button">
                            <div class="cart-after"><?= $countCart ?></div>
                        </i>
                    </a>
                </div>
                <li class="nav-item me-3 d-flex justify-content-between mb-5 mb-lg-0 py-5 py-lg-0 nav-sm d-lg-none">
                    <a class="py-5 py-lg-0 nav-link active text-upercase fw-bold fs-2 text-dark" aria-current="page"
                       href="?ctr=cart">Giỏ hàng</a>
                    <img src="./public/img/cart.jpg" alt="..." class="d-lg-none w-25 h-25 rounded-3 ms-3">
                </li>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid bg-dark py-4">
    <div class="d-flex align-items-center justify-content-center">
        <div class="w-60 justify-content-md-end d-flex flex-wrap justify-content-sm-start">
            <div class="d-flex justify-content-end align-items-center h-100 me-3">
                <i class="fa-solid fa-location-dot text-gray fs-4"></i>
                <span class="ms-3 text-white fw-semibold fs-4">Giao hàng tận nơi: </span>
                <span class="ms-3 text-white fw-semibold fs-4"><?php if (isset($_SESSION["idUser"])) {
                        echo $userInfo["address"];
                    } ?></span>
            </div>
            <div class=" d-flex justify-content-start align-items-center">
                <i class="fa-solid fa-clock text-gray fs-4"></i>
                <span class="ms-2 text-white fw-semibold fs-4">Giao ngay</span>
            </div>
        </div>
        <div class="ms-4 w-40 d-flex justify-content-xs-end align-items-center">
            <a href="?ctr=user-profile" role="button"
               class=" rounded-5 text-white bg-transparent btn-outline-white px-3 py-2 fs-4 fw-bold">
                Thay
                đổi
            </a>
        </div>
    </div>
</div>
<script>
    function changeCart(quantity) {
        const countProduct = document.querySelector('.cart-after');
        countProduct.innerText = quantity;
    }
</script>
<!--body main content-->
