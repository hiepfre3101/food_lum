<?php include_once("./view/header.php") ?>
    <link rel="stylesheet" href="./public/css/cart.css">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h4 class="card-title mb-4 ttdh"><i class="fa-solid fa-lock"></i>THÔNG TIN ĐẶT HÀNG</h4>
                <div class="tggh">
                    <p class="tggh1">THỜI GIAN GIAO HÀNG:</p>
                    <p class="gn">Giao ngay</p>
                </div>
                <div class="tggh">
                    <p class="tggh1">GIAO TỚI:</p>
                    <form>
                        <div class="form-group">
                            <label for="" class="form-label formlb">Địa chỉ</label>
                            <input name="" class="form-control form1" type="text">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label for="" class="form-label formlb">Ghi chú cho đơn hàng</label>
                            <input name="" class="form-control form1" type="text">
                        </div> <!-- form-group// -->
                    </form>
                    <br>
                </div>
                <br>
                <div class="tggh">
                    <p class="tggh1">THÔNG TIN CHI TIẾT:</p>
                    <form>
                        <div class="form-group">
                            <label for="" class="form-label formlb">Họ và tên*</label>
                            <input name="" class="form-control form1" type="text">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label for="" class="form-label formlb">Số điện thoại*</label>
                            <input name="" class="form-control form1" type="text">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label for="" class="form-label formlb">Địa chỉ email*</label>
                            <input name="" class="form-control form1" type="text">
                        </div> <!-- form-group// -->
                    </form>
                    <br>
                </div>
                <br>
                <div class="tggh">
                    <div class="tggh">
                        <p class="tggh1">PHƯƠNG THỨC THANH TOÁN:</p>
                        <fieldset>
                            <div class="form__radio">
                                <label for="">
                                    <svg class="icon">
                                    </svg>
                                    <i class="fa-solid fa-money-bill-1-wave fa-2x"></i>Thanh toán khi nhận hàng</label>
                                <input checked id="" name="" type="radio"/>
                            </div>
                        </fieldset>
                        <div>
                            <br>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block dathang"> Đặt hàng</button>
            </div>
            <div class="col-lg-5">
                <div class="container">
                    <div class="giohang-right1 py-5">
                        <p class="fs-2 fw- d-flex align-items-center justify-content-center">TÓM TẮT ĐƠN HÀNG</p>
                      <div class="px-4">
                            <?php foreach ($arrCart as $key => $value) { ?>
                                <p class="fw-bold"><?=$value?>x <?=getOneDataProducts($key)['product_name']?> <span class="tdh1"><?=getOneDataProducts($key)['product_price']*$value?>đ</span></p>
                                <?php global $totalPrice; $totalPrice += (getOneDataProducts($key)['product_price']*$value);?>
                            <?php } ?>
                      </div>
                        <hr class="hr1">
                        <div class="d-flex flex-column align-items-center px-4 fw-bold">
                            <p class="w-100 d-flex justify-content-between">Tổng đơn hàng <span class="tdh1"><?=$total?>đ</span></p>
                            <p class="w-100 d-flex justify-content-between">Phí giao hàng <span class="tdh1">10000đ</span></p>
                            <p class="w-100 d-flex justify-content-between">Tổng thanh toán <span class="tdh1"><?=$total + 10000?>đ</span></p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once("./view/footer.php") ?>