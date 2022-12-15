<?php require_once("header.php") ?>
    <!-- end header -->
    <div class="box-detail-order">
        <p class="title">Thông người dùng</p>
        <div class="sub-detail-order">
            <div class="info-clident">
                <form action="?ctr=update-user&&id=<?=$_GET['id']?>" method="post">
                    <p class="name-clident">Họ và tên : <span><?= getOneDataUser($_GET['id'])['full_name'] ?></span></p>
                    <p class="phone">Số điện thoại : <span><?= getOneDataUser($_GET['id'])['phone'] ?></span></p>
                    <p class="address">Địa chỉ : <span><?= getOneDataUser($_GET['id'])['address'] ?></span></p>
                    <p class="total-price">Địa chỉ email : <span><?= getOneDataUser($_GET['id'])['email'] ?></span></p>
                </form>
            </div>
            <div class="list-product-order">
                <div class="img-user">
                    <img src="<?=getOneDataUser($_GET['id'])['avatar']?>" alt="">
                </div>
            </div>

        </div>
    </div>
<?php require_once("footer.php") ?>