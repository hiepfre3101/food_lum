<?php include_once("./view/header.php") ?>
<link rel="stylesheet" href="./public/css/cart.css">
<div>
    <div class="container">
        <form method="post" action="?ctr=add-order" id="form-cart">
            <div class="row">
                <div class="col-lg-7">
                    <h4 class="card-title mb-4 ttdh"><i class="fa-solid fa-lock"></i>THÔNG TIN ĐẶT HÀNG</h4>
                    <div class="tggh">
                        <p class="tggh1">THỜI GIAN GIAO HÀNG:</p>
                        <p class="gn">Giao ngay</p>
                    </div>
                    <div class="tggh">
                        <p class="tggh1">GIAO TỚI:</p>

                        <div class="form-group">
                            <label for="" class="form-label formlb">Địa chỉ</label>
                            <input name="address" readonly value="<?= $arrInfoUser['address'] ?>" class="form-control form1" type="text">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                           <label for="order_id" class="form-label formlb">Mã hóa đơn</label>
                           <input class="form-control form1" readonly id="order_id" name="order_id" type="text" value="<?php echo date("YmdHis") ?>"/>
                         </div> 
                    <div class="form-group">
                        <label class="formlb">Thời hạn thanh toán</label>
                        <input class="form-control form1" id="txtexpire"
                               name="txtexpire" readonly type="text" value="<?php echo $expire;?>"/>
                    </div>
                        <div class="form-group">
                            <label for="" class="form-label formlb">Ghi chú cho đơn hàng</label>
                            <input name="order_desc" class="form-control form1" id="order_desc" type="text">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                          <label for="language" class="form-label formlb">Ngôn ngữ</label>
                          <select name="language" id="language" class="form-control form1">
                            <option value="vn">Tiếng Việt</option>
                            <option value="en">English</option>
                          </select>
                       </div>
        </form>
        <br>
    </div>
    <br>
    <div class="tggh">
        <p class="tggh1">THÔNG TIN CHI TIẾT:</p>

        <div class="form-group">
            <label for="" class="form-label formlb">Họ và tên*</label>
            <input name="full_name" readonly value="<?= $arrInfoUser['full_name'] ?>" class="form-control form1" type="text">
        </div> <!-- form-group// -->
        <div class="form-group">
            <label for="" class="form-label formlb">Số điện thoại*</label>
            <input name="phone" readonly value="<?= $arrInfoUser['phone'] ?>" class="form-control form1" type="text">
        </div> <!-- form-group// -->
        <div class="form-group">
            <label for="" class="form-label formlb">Địa chỉ email*</label>
            <input name="email" readonly value="<?= $arrInfoUser['email'] ?>" class="form-control form1" type="text">
        </div> <!-- form-group// -->
        <div class="form-group">
            <label for="" class="form-label formlb">Phương thức thanh toán*</label>
             <div class="d-flex justify-content-between align-items-center bg-dark p-4 mt-3">
               <p class="text-white fs-3 fw-semibold">Thanh toán khi nhận hàng</p> 
              <input name="pay"  value="cod" onclick="changeActionForm()" type="radio" checked>
             </div>
        </div> <!-- form-group// -->
        <div class="form-group mt-2">
             <div class="d-flex justify-content-between align-items-center bg-dark p-4">
               <p class="text-white fs-3 fw-semibold">Thanh toán online</p> 
              <input name="pay"  value="online" onclick="changeActionForm()" type="radio">
             </div>
        </div> <!-- form-group// -->
       
        <br>
    </div>
    <br>
    <button type="submit" name="redirect" id="redirect" class="btn btn-block dathang"> Đặt hàng</button>
</div>
<div class="col-lg-5">
    <div class="container">
        <div class="giohang-right1 py-5">
            <p class="fs-2 fw- d-flex align-items-center justify-content-center">TÓM TẮT ĐƠN HÀNG</p>
            <div class="px-4">
                <?php foreach ($arrCart as $key => $value) { ?>
                    <p class="fw-bold"><?= $value ?>x <?= getOneDataProducts($key)['product_name'] ?> <span class="tdh1"><?= getOneDataProducts($key)['product_price'] * $value ?>đ</span>
                    </p>
                <?php } ?>
            </div>
            <hr class="hr1">
            <div class="d-flex flex-column align-items-center px-4 fw-bold">
                <p class="w-100 d-flex justify-content-between">Tổng đơn hàng <span class="tdh1"><?= $_POST['total'] ?>đ</span></p>
                <p class="w-100 d-flex justify-content-between">Phí giao hàng <span class="tdh1">10000đ</span></p>
                <p class="w-100 d-flex justify-content-between">Tổng thanh toán <span class="tdh1"><?= $_POST['total'] += 10000 ?>đ</span></p>
                <input hidden type="text" name="total" value="<?= $_POST['total'] ?>">
                <input hidden type="text" name="voucherId" value="<?= $_POST['voucherId'] ?>">
            </div>
            <br>
        </div>
    </div>
</div>
</div>
</form>
</div>
</div>
<script src="./public/js/main.js"></script>
<?php include_once("./view/footer.php") ?>