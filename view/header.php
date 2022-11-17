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
    <link rel="stylesheet" href="../public/css/base.css">
    <link rel="stylesheet" href="../public/css/header.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg  container-fluid px-lg-5 py-lg-4">
        <div class="container-fluid">
            <a class="navbar-brand w-10 d-flex justify-content-center " href="index.html"><img
                    src="../public/img/logo.png" alt="logo" class="img-fluid"></a>
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
                            <a class="py-5 py-lg-0 nav-link active text-upercase fw-bold fs-2 text-dark"
                                aria-current="page" href="#">Thực đơn</a>
                            <img src="../../public/img/slider3.jpg" alt="..." class="d-lg-none w-30 rounded-3 ms-3">
                        </li>
                        <li class="nav-item me-3  d-flex justify-content-between mb-5 mb-lg-0 py-5 py-lg-0 nav-sm">
                            <a class="py-5 py-lg-0 nav-link active text-upercase fw-bold fs-2 text-dark"
                                aria-current="page" href="#">Khuyến mãi</a>
                            <img src="../../public/img/slider3.jpg" alt="..." class="d-lg-none w-30 rounded-3 ms-3">
                        </li>
                    </ul>
                    <div class="w-50 d-lg-flex d-none d-lg-block" style="height:30px;">
                        <form class="d-flex flex-fill h-100 " role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button role="button"
                                class="btn btn-outline-primary w-10 h-100 d-flex align-items-center justify-content-center"
                                type="submit"><i class="fa-solid fa-magnifying-glass text-primary"></i> </button>
                        </form>
                        <i class="fa-solid fa-circle-user fs-1 px-3 d-none d-lg-block text-orange" role="button"></i>
                        <i class="fa-solid fa-burger fs-1 cart text-orange" role="button">
                            <div class="cart-after">0</div>
                        </i>
                    </div>
                    <li class="nav-item me-3 d-flex justify-content-between mb-5 mb-lg-0 py-5 py-lg-0 nav-sm d-lg-none">
                        <a class="py-5 py-lg-0 nav-link active text-upercase fw-bold fs-2 text-dark" aria-current="page"
                            href="#">Giỏ hàng</a>
                        <img src="../../public/img/cart.jpg" alt="..." class="d-lg-none w-25 h-25 rounded-3 ms-3">
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!--body main content-->

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</html>