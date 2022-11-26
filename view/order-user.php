<?php include_once("./view/header.php") ?>
<link rel="stylesheet" href="./public/css/voucher.css">
<div class=" row app w-100 px-5 py-4">
    <div class="col-lg-3 col-10 acc-wrapper">
        <div class="profile-block w-100 d-flex align-items-center justify-content-start">
            <div class="d-flex justify-content-start">
                <?php if (isset($_SESSION['idUser'])) {
                    echo "<img class='rounded-circle w-25 me-5' src =" . getOneDataUser($_SESSION['idUser'])['avatar'] . "></img>";
                    echo "<div><p class='fs-4 fw-semibold'>" . getOneDataUser($_SESSION['idUser'])['user_name'] . "</p>";
                    echo "<a href='#' class='text-decoration-none text-gray d-flex justify-content-start align-items-center fs-5 text-gray'><i class='fa-solid fa-pencil'></i> Sửa hồ sơ</a></div>";
                } else {
                    echo "<a href='?ctr=login'>Đăng nhập</a>";
                }
                ?>
            </div>
        </div>
        <nav class="d-flex flex-column justify-content-center mt-5">
            <a href="#" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-regular fa-user me-2 "></i><span class="text-dark link-orange">Tài khoản của tôi</span></a>
            <a href="?ctr=order-user" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-regular fa-user me-2 "></i><span class="text-dark link-orange">Đơn hàng của tôi</span></a>
            <a href="?ctr=voucher-user" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-solid fa-ticket-simple me-2 "></i><span class="text-dark link-orange">Kho Voucher</span></a>
        </nav>
    </div>
    <div class="list-wrapper col-lg-9 col-12 p-5 ">
        <p class="text-dark fw-semibold fs-1 title-orange position-relative ms-4">Đơn hàng</p>
        <div class="mt-5">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active-tab fs-3 text-dark" aria-current="page" href="#">Tất cả</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-3 text-dark" href="#">Đang giao</a>
                </li>
            </ul>
            <div class="row mt-4">
                <?php foreach ($orders as $value) : ?>
                    <div class="col-lg-6 col-12 voucher shadow-lg d-flex justify-content-between mb-5 p-4">
                        <img src="./public/img/delivery.gif" alt="" class="w-25">
                        <div class="d-flex align-items-center justify-content-center flex-fill flex-column">
                            <p class="fw-bold">Đơn hàng ngày :<span class="text-red"> <?= $value["date_time"] ?></span></p>
                            <p class="fw-bold">Tổng tiền: <span class="text-red"><?= $value["total"] ?>đ</span></p>
                            <div class="dropdown">
                                <button class="p-2 text-white btn-save dropdown-toggle w-100 h-100" disabled type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Chi tiết
                                </button>
                                <div class="dropdown-menu">
                                 <!--Tìm cách lấy chi tiết đơn hàng ra-->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>


<?php include_once("./view/footer.php") ?>