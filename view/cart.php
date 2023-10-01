<?php include_once("./view/header.php") ?>
<link rel="stylesheet" href="./public/css/cart.css">

<div>
    <div class="container" >
        <form action="?ctr=cart-detail" method="post">
            <h4 class="card-title mb-4 ghct">GIỎ HÀNG CỦA TÔI</h4>
            <div class="row">
                <div class="col-lg-8 overflow-auto cart-wrapper" id="cart-wrapper">
                         <!-- hiển thị danh sách sản phẩm của giỏ hàng -->
                   
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0 <?php if (!is_array($arrCart)) {
                                                        echo "d-none";
                                                    } ?>">
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
                            <input type="text" readonly class="ttt1 fw-bold w-25" id="totalOrder" name="total" value="">
                            <span class="">đ</span>
                        </p>
                        <hr class="hr">
                        <button class="thanhtoan" type="submit">Thanh toán </button>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <div class="recomend w-100 p-4 h-50">
                <h2 class="dg fw-semibold ">Sản phẩm bán chạy</h2>
                <div class="row">
                    <?php foreach ($arrProduct as $value) : ?>
                        <div class="col-md-4 col-6 position-relative mb-2">
                            <a href="?ctr=add-cart&id=<?= $value["idpro"] ?>" class="img-overlay">
                                <img class="img4" src="<?= getImg($value["idpro"])[0]["src"] ?>" alt="">
                            </a>
                            <a href="?ctr=product-detail&&id=<?= $value["idpro"] ?>" class="d-flex align-items-center justify-content-center p-3 position-absolute top-10 end-10 rounded-circle bg-primary h-15 w-10  text-white text-decoration-none">
                                <span class="fw-semibold fs-3 ">+</span>
                            </a>
                            <div class="w-75 d-flex justify-content-around position-absolute bottom-0 flex-wrap py-4">
                                <p class="text-white fw-semibold"><?= $value["product_name"] ?></p>
                                <p class="text-white fw-semibold"><?= $value["product_price"] ?><span>đ</span></p>
                            </div>
                        </div>
                        <!--  -->
                    <?php endforeach ?>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="./public/js/cart.js" type="text/javascript"></script>
<?php include_once("./view/footer.php") ?>