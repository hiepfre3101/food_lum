<?php include_once("./view/header.php") ?>
<link rel="stylesheet" href="./public/css/cart.css">
<script src="./public/js/main.js" type="text/javascript"></script>
<div>
    <div class="container" onload="loadTotal()">
        <form action="?ctr=cart-detail" method="post">
            <h4 class="card-title mb-4 ghct">GIỎ HÀNG CỦA TÔI</h4>
            <div class="row">
                <div class="col-lg-8 overflow-auto cart-wrapper">
                    <!--      hiển thị danh sách sản phẩm của giỏ hàng-->
                    <?php
                    if (!is_array($arrCart)) {
                        echo "<h2 class='fw-semibold'>Hãy đặt món ăn ngay nào</h2>";
                    } else {
                        foreach ($arrCart as $key => $value) { ?>
                            <div class='giohang d-flex justify-content-start'>
                                <img class='gh1' src="<?= getImg($key)[0]['src'] ?>" alt=''>
                                <div class="info-cart-block w-75">
                                    <div class='tengh'>
                                        <p class='namegh'><?= getOneDataProducts($key)['product_name'] ?></p>
                                        <div class="w-100 d-flex justify-content-start">
                                            <div class="action-block w-50 d-flex justify-content-around">
                                                <span class='input-group-text btn btn-danger h-100 d-flex align-items-center justify-content-center fw-bold fs-3' onclick="mathPrice(<?= getOneDataProducts($key)['product_price'] ?>,'minus',<?= $key ?>,'money<?= $key ?>')"> - </span>
                                                <input type='number' name="<?= $key ?>" value='<?= $value ?>' class='form-control text-center border h-100 fs-3 flex-fill ms-2 me-2' id="<?= $key ?>" min='1' max='100' readonly />
                                                <span class='input-group-text btn btn-success h-100 d-flex align-items-center justify-content-center fw-bold fs-3' onclick="mathPrice(<?= getOneDataProducts($key)['product_price'] ?>,'plus',<?= $key ?>,'money<?= $key ?>')"> + </span>
                                            </div>
                                            <!--lấy giá ở đây-->
                                            <p class='pr w-25 fs-3 d-flex align-items-center ms-3'>
                                                <span class="money-each" id="money<?= $key ?>"><?= (int)$arrCart[$key] * getOneDataProducts($key)['product_price'] ?></span>
                                                <span>đ</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class='xn'>
                                        <a class='cn' onclick=" return confirm('Bạn muốn xóa chứ.'); " href='?ctr=delete-item-cart&&idItem=<?=$key?>'>Xoá</a>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="giohang-right">
                        <p class="mon">
                            <?php if (isset($_SESSION["arrCart"])) {
                                echo count($_SESSION["arrCart"]);
                            } else {
                                echo "0";
                            }
                            ?> MÓN</p>
                        <hr class="hr">
                        <p class="gg">Bạn có Mã giảm giá?</p>
                        <div class="vc">
                            <select name="voucherId" class="vou" id="voucher">
                                <option value="" id="0">Chọn voucher</option>
                                <?php foreach ($vouchers as $value) : ?>
                                    <!--id : lưu trữ discount của từng voucher để tính tiền js-->
                                    <!--value : truyền id của voucher sang back end-->
                                    <option value="<?= $value['id'] ?>" id="<?= $value["discount"] ?>"><?= $value["content"] ?></option>
                                <?php endforeach ?>
                            </select>
                            <button class="ad px-2" type="button" onclick="loadTotal()">Áp dụng</button>
                        </div>
                        <br>
                        <hr class="hr">
                        <p class="ttt d-flex justify-content-start align-items-center">
                            Tổng thanh toán:
                            <input type="text" readonly class="ttt1 fw-bold" id="totalOrder" name="total" value="">
                            <span>đ</span>
                            </input>
                        </p>
                        <hr class="hr">
                        <button class="thanhtoan" type="submit">Thanh toán khi nhận hàng</button>
                        <button class="thanhtoan" style="margin-top: 10px" type="submit">Thanh toán online</button>
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
                            <img class="img4" src="https://static.kfcvietnam.com.vn/images/items/lg/Chikoyaki_C.jpg?v=4pbPw3" alt="">
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-center p-3 position-absolute top-10 end-10 rounded-circle bg-primary h-15 w-10  text-white text-decoration-none">
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
                            <img class="img4" src="https://static.kfcvietnam.com.vn/images/items/lg/Chikoyaki_C.jpg?v=4pbPw3" alt="">
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-center p-3 position-absolute top-10 end-10 rounded-circle bg-primary h-15 w-10  text-white text-decoration-none">
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
                            <img class="img4" src="https://static.kfcvietnam.com.vn/images/items/lg/Chikoyaki_C.jpg?v=4pbPw3" alt="">
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-center p-3 position-absolute top-10 end-10 rounded-circle bg-primary h-15 w-10  text-white text-decoration-none">
                            <span class="fw-semibold fs-3 ">+</span>
                        </a>
                        <div class="w-75 d-flex justify-content-around position-absolute bottom-0 flex-wrap">
                            <p class="text-white fw-semibold">Gà Giòn Cay</p>
                            <p class="text-white fw-semibold">60000</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include_once("./view/footer.php") ?>