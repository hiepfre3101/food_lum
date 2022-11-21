<?php include_once("./view/header.php") ?>

<link rel="stylesheet" href="./public/css/cart.css">
<div class="container">
    <h4 class="card-title mb-4 ghct">GIỎ HÀNG CỦA TÔI</h4>
    <div class="row">
        <div class="col-lg-8 overflow-auto cart-wrapper">
            <!--      hiển thị danh sách sản phẩm của giỏ hàng-->
            <?php 
             if(!is_array($arrCart)){
              echo "<h2 class='fw-semibold'>Hãy đặt món ăn ngay nào</h2>";
             } else
                foreach ($arrCart as $key => $value):?>
                     <div class='giohang d-flex justify-content-start'>
                        <img class='gh1' src="<?=getOneDataProducts($key)['image']?>" alt=''>
                       <div class="info-cart-block w-75">
                            <div class='tengh'>
                                    <p class='namegh'><?=getOneDataProducts($key)['product_name']?></p>
                               <div class="w-100 d-flex justify-content-start">
                                    <div class="action-block w-50 d-flex justify-content-around">
                                        <span class='input-group-text btn btn-danger h-100 d-flex align-items-center justify-content-center fw-bold fs-3'
                                              onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> - </span>
                                        <input type='number' value='<?php $value?>' class='form-control text-center border h-100 fs-3 flex-fill ms-2 me-2' min='1' max='100'>
                                        <span class='input-group-text btn btn-success h-100 d-flex align-items-center justify-content-center fw-bold fs-3'
                                              onclick="this.parentNode.querySelector('input[type=number]').stepUp()"> + </span>
                                    </div>
                                    <p class='pr w-25 fs-3 d-flex align-items-center ms-3'><?=getOneDataProducts($key)['product_price']?><span>đ</span></p>
                               </div>
                            </div>
                            <div class='xn'>
                                <a class='cn' href=''>Xoá</a>
                            </div>
                       </div>
                    </div>
                <?php endforeach;?>
        </div>
        <div class="col-lg-4 mt-5 mt-lg-0">
            <div class="giohang-right">
                <p class="mon">2 MÓN</p>
                <hr class="hr">
                <p class="gg">Bạn có Mã giảm giá?</p>
                <div class="vc">
                    <select class="vou" name="" id="">
                        <option value="0" selected>Chọn voucher</option>
                        <option value="">Minh</option>
                        <option value="">Minh</option>
                        <option value="">Minh</option>
                    </select>
                    <button class="ad px-2" type="submit">Áp dụng</button>
                </div>
                <br>
                <hr class="hr">
                <p class="tdh">Tổng đơn hàng <span class="tdh1">50000đ</span></p>
                <p class="tdh">Phí giao hàng <span class="tdh1">10000đ</span></p>
                <p class="ttt">Tổng thanh toán <span class="ttt1">60000đ</span></p>
                <hr class="hr">
                <button class="thanhtoan" type="submit">Thanh toán</button>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="recomend w-100 p-4 h-50">
        <h2 class="dg fw-semibold ">Sản phẩm tương tự</h2>
        <div class="row">
            <div class="col-md-4 col-6 position-relative">
                <a href="#">
                    <img class="img4" src="https://static.kfcvietnam.com.vn/images/items/lg/Chikoyaki_C.jpg?v=4pbPw3"
                         alt="">
                </a>
                <a href="#"
                   class="d-flex align-items-center justify-content-center p-3 position-absolute top-10 end-10 rounded-circle bg-primary h-15 w-10  text-white text-decoration-none">
                    <span class="fw-semibold fs-3 ">+</span>
                </a>
                <div class="w-75 d-flex justify-content-around position-absolute bottom-0 flex-wrap">
                    <p class="text-white fw-semibold">Gà Giòn Cay</p>
                    <p class="text-white fw-semibold">60000</p>
                </div>
            </div>
            <!--  -->
            <div class="col-md-4 col-6 position-relative mb-2">
                <a href="#">
                    <img class="img4" src="https://static.kfcvietnam.com.vn/images/items/lg/Chikoyaki_C.jpg?v=4pbPw3"
                         alt="">
                </a>
                <a href="#"
                   class="d-flex align-items-center justify-content-center p-3 position-absolute top-10 end-10 rounded-circle bg-primary h-15 w-10  text-white text-decoration-none">
                    <span class="fw-semibold fs-3 ">+</span>
                </a>
                <div class="w-75 d-flex justify-content-around position-absolute bottom-0 flex-wrap">
                    <p class="text-white fw-semibold">Gà Giòn Cay</p>
                    <p class="text-white fw-semibold">60000</p>
                </div>
            </div>
            <!--  -->
            <div class="col-md-4 col-6 position-relative">
                <a href="#">
                    <img class="img4" src="https://static.kfcvietnam.com.vn/images/items/lg/Chikoyaki_C.jpg?v=4pbPw3"
                         alt="">
                </a>
                <a href="#"
                   class="d-flex align-items-center justify-content-center p-3 position-absolute top-10 end-10 rounded-circle bg-primary h-15 w-10  text-white text-decoration-none">
                    <span class="fw-semibold fs-3 ">+</span>
                </a>
                <div class="w-75 d-flex justify-content-around position-absolute bottom-0 flex-wrap">
                    <p class="text-white fw-semibold">Gà Giòn Cay</p>
                    <p class="text-white fw-semibold">60000</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once ("./view/footer.php") ?>