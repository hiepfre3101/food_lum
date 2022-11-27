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
        <p class="text-dark fw-semibold fs-1 title-orange position-relative ms-4">Chi tiết đơn hàng</p>
        <p class="fw-bold">Đơn hàng ngày :<span class="text-red"> <?= $order["date_time"] ?></span></p>
        <div class="d-flex justify-content-around">
            <img src="./public/img/order.gif" alt="" class="w-25">
            <div class="mt-5 flex-fill">
                <table class="mt-4 w-100">
                    <thead>
                        <th>Món ăn</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </thead>
                    <tbody>
                        <?php foreach ($orderDetails as $value) : ?>
                            <tr>
                                <th><?= $value["product_name"] ?></th>
                                <th><?= $value["quantity"] ?></th>
                                <th><?= $value["product_price"] ?></th>
                                <th><?= $value["quantity"] * $value["product_price"] ?></th>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <p class="fw-bold">Voucher: <span class="text-red"><?= $order["discount"] ?>%</span></p>
                    <p class="fw-bold">Giảm giá: <span class="text-red"><?= $order["discount"]/100*$order["total"]?>đ</span></p>
                    <p class="fw-bold">Tổng tiền: <span class="text-red"><?= $order["total"] ?>đ</span></p>
                    <hr>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include_once("./view/footer.php") ?>