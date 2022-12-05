<?php include_once ("./view/header.php")?>
<?php include_once("./view/order-tab.php")?>
                <div class="row mt-4">
                    <?php foreach ($orders as $value) : ?>
                        <div class="col-lg-6 col-12 voucher shadow-lg d-flex justify-content-between mb-5 p-4">
                            <img src="./public/img/delivery.gif" alt="" class="w-25">
                            <div class="d-flex align-items-center justify-content-center flex-fill flex-column">
                                <p class="fw-bold">Đơn hàng ngày :<span class="text-red"> <?= $value["date_time"] ?></span></p>
                                <p class="fw-bold">Tổng tiền: <span class="text-red"><?= $value["total"] ?>đ</span></p>
                                <div class="dropdown">
                                    <a href="?ctr=order-detail-user&order=<?= $value["idorder"] ?>" class="d-block px-3 py-2 text-white btn-save w-100 h-100" type="button">
                                        Chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
<?php include_once ("./view/footer.php")?>