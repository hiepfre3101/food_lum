<link rel="stylesheet" href="./public/css/voucher.css">
    <div class=" row app w-100 px-5 py-4">
        <div class="col-lg-3 col-10 acc-wrapper">
            <div class="profile-block w-100 d-flex align-items-center justify-content-start">
                <div class="d-flex justify-content-start">
                    <?php if (isset($_SESSION['idUser'])) {
                        echo "<img class='rounded-circle  me-5 img-block img-block-small' src =" . getOneDataUser($_SESSION['idUser'])['avatar'] . "></img>";
                        echo "<div><p class='fs-4 fw-semibold'>" . getOneDataUser($_SESSION['idUser'])['user_name'] . "</p>";
                        echo "<a href='#' class='text-decoration-none text-gray d-flex justify-content-start align-items-center fs-5 text-gray'><i class='fa-solid fa-pencil'></i> Sửa hồ sơ</a></div>";
                    } else {
                        echo "<a href='?ctr=login'>Đăng nhập</a>";
                    }
                    ?>
                </div>
            </div>
            <nav class="d-flex flex-column justify-content-center mt-5">
                <a href="?ctr=user-profile" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-regular fa-user me-2 "></i><span class="text-dark link-orange">Tài khoản của tôi</span></a>
                <a href="?ctr=order-user" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-regular fa-user me-2 "></i><span class="text-dark link-orange">Đơn hàng của tôi</span></a>
                <a href="?ctr=voucher-user" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-solid fa-ticket-simple me-2 "></i><span class="text-dark link-orange">Kho Voucher</span></a>
            </nav>
        </div>
        <div class="list-wrapper col-lg-9 col-12 p-5 ">
            <p class="text-dark fw-semibold fs-1 title-orange position-relative ms-4">Đơn hàng</p>
            <div class="mt-5">
                <ul class="nav nav-pills tab-nav">
                        <a class="nav-link fs-3 text-dark" aria-current="page" href="?ctr=order-user" onclick="changeTab(this)">Tất cả</a>
                        <a class="nav-link fs-3 text-dark" href="?ctr=order-ship"  onclick="changeTab(this)">Đang giao</a>
                        <a class="nav-link fs-3 text-dark" href="?ctr=order-done"  onclick="changeTab(this)">Giao hàng thành công</a>
                </ul>