<?php require_once("header.php") ?>
    <!-- end header -->
    <div class="box-detail-order">
        <p class="title">Thông tin đơn hàng</p>
        <div class="sub-detail-order">
            <div class="info-clident">
                <form action="?ctr=status-Order&&idOrder=<?= $_GET['idOrder'] ?>" method="post">
                    <p class="name-clident">Họ và tên : <span><?= $idUser['full_name'] ?></span></p>
                    <p class="phone">Số điện thoại : <span><?= $idUser['phone'] ?></span></p>
                    <p class="address">Địa chỉ : <span><?= $idUser['address'] ?></span></p>
                    <p class="total-price">Tổng đơng hàng : <span><?= $total['total'] ?></span>đ</p>
                    <div class="btn-status">
                        <?php if ($_GET['status'] == 1) { ?>
                            <input type="radio" value="1" hidden
                                <?= (getOneDataOrder($_GET['idOrder'])['status'] == 1) ? "checked" : "" ?> name="status"
                                   id="check1">
                            <label for="check1">Đơn Hàng Mới</label>
                        <?php } ?>
                        <input type="radio"
                               value="2" <?= (getOneDataOrder($_GET['idOrder'])['status'] == 2) ? "checked" : "" ?>
                               hidden name="status" id="check2">
                        <label for="check2">Xác Nhận Đơn</label>
                        <?php if ($_GET['status'] == 2) { ?>
                            <input type="radio" value="3" hidden name="status" id="check3">
                            <label for="check3">Giao Thành Công</label>
                        <?php } ?>
                    </div>
                    <button type="submit">Cập nhật trạng thái</button>
                </form>
            </div>
            <div class="list-product-order">
                <?php foreach ($arrProduct as $key => $value) { ?>
                    <div class="item-order-product">
                        <div class="item-left">
                            <img src="<?= getImg($value['idpro'])[0]['src'] ?>" alt="">
                        </div>
                        <div class="item-right">
                            <p class="name-product-order">Sản phẩm : <span><?= $value['product_name'] ?></span></p>
                            <p class="quantity-porduct-order">Số Lượng : <span><?= $value['quantity'] ?></span></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php require_once("footer.php") ?>