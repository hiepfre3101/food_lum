<?php include_once("./view/header.php") ?>
<link rel="stylesheet" href="./public/css/product_detail.css">
<div class="container">
    <div class="row">
        <div class="col-lg-6 sp">
            <img class="img1" src="<?= $product['image'] ?>" alt="">
        </div>
        <div class="col-lg-6 fo">
            <form action="?ctr=cart&&id=<?=$product['idpro']?>" method="POST">
                <div class="frames px-3">
                    <h3 class="font"><?= $product['product_name'] ?></h3>
                    <h6 class="font1"><?= $product['descripton'] ?></h6>
                    <hr class="hr1">
                    <h4 class="m">MÓN CỦA BẠN</h4>
                    <p class="p">Giá: <strong class="price1"><?= $product['product_price'] ?>đ</strong></p>
                    <div class="input-group il">
                        <p class="sl ">Số lượng: </p>
                        <div class="d-flex w-50 justify-content-around">
                            <span style="border:2px solid black" class="input-group-text btn p-4 rounded-circle fw-semibold d-flex align-items-center justify-content-center fs-3" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> - </span>
                            <input type="number" value="1" class="outline-none border-none shadow-none form-control text-center w-25 h-50 fs-3 fw-semibold" name="quantity" min="1" max="100">
                            <span style="border:2px solid black" class="input-group-text btn p-4 rounded-circle fw-semibold d-flex align-items-center justify-content-center fs-3" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"> + </span>
                        </div>
                    </div>
                    <hr class="hr1">
                    <button type="submit" class="bt" name="">Thêm vào giỏ hàng</button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="container-comment">
            <h3 class="dg">Đánh Giá Sản Phẩm</h3>

            <div class="container-star">

                <div class="star">
                    <p class="ad">4.7 trên 5 </p>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="star1">
                    <input class="s" type="button" value="Tất Cả">
                    <input class="s" type="button" value="5 Sao">
                    <input class="s" type="button" value="4 Sao">
                    <input class="s" type="button" value="3 Sao">
                    <input class="s" type="button" value="2 Sao">
                    <input class="s" type="button" value="1 Sao">
                </div>

            </div>
            <div class="comment">
                <div class="comment-left">
                    <img class="img2" src="data:image/png;base64,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" alt="">
                </div>
                <div class="comment-right">
                    <p class="name">User</p>
                    <div class="star2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="date">2020-10-28 00:18</div>
                    <div class="comment-user">Sản phẩm rất chất lượng</div>
                    <div class="img-sp">
                        <img class="img3" src="https://static.kfcvietnam.com.vn/images/items/lg/FF-(L).jpg?v=4pbPw3" alt="">
                    </div>
                    <div class="like">
                        <i class="fa-solid fa-thumbs-up"></i>
                    </div>
                </div>
                <hr>
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
</div>

<?php include_once("./view/footer.php") ?>