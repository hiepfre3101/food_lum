<?php include_once("./view/header.php") ?>
<link rel="stylesheet" href="./public/css/product_detail.css">
<div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 sp oveflow-hidden">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active img-wrap" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0"><img class="img1" src="<?= $images["0"]["src"] ?>" alt=""></div>
                    <div class="tab-pane fade img-wrap" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0"><img class="img1" src="<?= $images["1"]["src"] ?>" alt=""></div>
                    <div class="tab-pane fade img-wrap" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0"><img class="img1" src="<?= $images["2"]["src"] ?>" alt=""></div>
                </div>
                <ul class="nav nav-pills mb-3 d-flex justify-content-start" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><img style="width: 100px;height:100px;" src="<?= $images["0"]["src"] ?>" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><img style="width: 100px;height:100px;" src="<?= $images["1"]["src"] ?>" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><img style="width: 100px;height:100px;" src="<?= $images["2"]["src"] ?>" alt=""></button>
                    </li>

                </ul>
            </div>
            <div class="col-lg-6 mt-10 mt-lg-0">
                <form action="?ctr=add-cart&id=<?= $product['idpro'] ?>" method="POST">
                    <div class="frames px-3">
                        <h3 class="font"><?= $product['product_name'] ?></h3>
                        <h6 class="font1"><?= $product['descripton'] ?></h6>
                        <hr class="hr1">
                        <h4 class="m">MÓN CỦA BẠN</h4>
                        <p class="p">Giá: <strong class="price1" id="money"><?= $product['product_price'] ?></strong><span style="color:red;">đ</span></p>
                        <div class="input-group il">
                            <p class="sl ">Số lượng: </p>
                            <div class="d-flex w-40 justify-content-around">
                                <span onclick="mathPrice(<?= $product['product_price'] ?>,'minus',<?= $product['idpro'] ?>,'money')" style="border:3px solid black" class="w-25 input-group-text btn p-1 rounded-circle fw-bold d-flex align-items-center justify-content-center fs-3"> - </span>
                                <input type="number" id="<?= $product['idpro'] ?>" value="1" class="mt-3 outline-none border-none shadow-none form-control text-center w-25 h-50 fs-3 fw-semibold" name="quantity" min="1" max="100" readonly />
                                <span onclick="mathPrice(<?= $product['product_price'] ?>,'plus',<?= $product['idpro'] ?>,'money')" style="border:3px solid black" class="w-25 input-group-text btn p-1 rounded-circle fw-bold d-flex align-items-center justify-content-center fs-3"> + </span>
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
        <br>
        <br>
<br>
<br>
<div class="row" id="binhluan">
    
<iframe src="view/binhluanform.php?idpro=<?=$product['idpro'] ?>" frameborder="0" width="100%" height="400px"></iframe>
</div>


<div class="recomend w-100 p-4 h-50">
    <h2 class="dg fw-semibold ">Sản phẩm tương tự</h2>
    <div class="row">
        <?php foreach($productSame as $value):?>
        <div class="col-md-3 col-6 position-relative">
            <a href="?ctr=product-detail&id=<?=$value["idpro"]?>">
                <img class="img4" src="<?=getImg($value["idpro"])[0]["src"]?>" alt="">
            </a>
            <a href="?ctr=add-cart&id=<?=$value["idpro"]?>" class="d-flex align-items-center justify-content-center p-3 position-absolute top-10 end-10 rounded-circle bg-secondary btn-add text-white text-decoration-none">
                <span class="fw-semibold fs-3 ">+</span>
            </a>
            <div class="w-75 d-flex justify-content-around position-absolute bottom-0 flex-column ms-3">
                <p class="text-white fw-semibold"><?=$value["product_name"]?></p>
                <p class="text-white fw-semibold"><?=$value["product_price"]?>đ</p>
            </div>
        </div>
        <?php endforeach;?>
        <!--  -->
    </div>
</div>
</div>



<script src="./public/js/main.js"></script>
<?php include_once("./view/footer.php") ?>