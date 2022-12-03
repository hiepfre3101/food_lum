<?php include_once ("./view/header.php")?>
<link rel="stylesheet" href="./public/css/menu.css">
<link rel="stylesheet" href="./public/css/user-home.css">
<body>
    <div class="w-100 container-fluid d-flex align-items-center justify-content-around nav-parent fixed-header bg-white p-3">
        <?php for($i=0;$i<count($arrCategory);$i++){?>
         <a href="#menu-<?=$i+1?>" onclick="activeNav(this)" class="d-block fw-bold fs-3 item-nav  text-decoration-none text-dark <?php if($i==0) echo 'item-active';?>" id="item<?=$i+1?>">
              <?=$arrCategory[$i]["categories_name"]?>
         </a>
        <?php }?>
    </div>
    <div class="container container-content">
        <?php for($i=0;$i<count($arrProductEachCategory);$i++){?>
        <div class="grid-block w-100 menu-block" id="menu-<?=$i+1?>" >
            <h1 class="d-flex align-items-center">
                <img src="./public/img/gif1.gif" alt="..." class="w-10">
                <span  class="fw-semibold fs-1"><?=$arrCategory[$i]["categories_name"]?></span>
            </h1>
            <!--hiển thị sản phẩm cũng là dùng đường dẫn ảnh tạm thời chỉnh sửa sau-->
            <div class="row" id="product-list-1">
                <?php foreach($arrProductEachCategory[$i] as $value):?>
                <div class="col-xxl-2 col-lg-3 col-12 col-sm-4 mb-5">
                    <div class="card w-100 shadow product" style="width: 18rem;">
                        <a class="overflow-hidden" href="?ctr=product-detail&&id=<?=$value["idpro"]?>">
                            <img src="<?=getImg($value["idpro"])[0]["src"]?>" class="card-img-top img-col img-product" alt="...">
                        </a>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between ">
                                <h5 class="card-title fs-3 fw-bold overflow-hidden mw-100"><?=$value["product_name"]?></h5>
                                <h5 class="card-title fs-3"><?=$value["product_price"]?><span>đ</span></h5>
                            </div>
                            <div class="d-lg-flex align-items-center justify-content-start d-none">
                                <p class="card-text overflow-hidden mh-50 mw-50"><?=$value["descripton"]?></p>
                                <a href="?ctr=product-detail&&id" class="fs-4 text-decoration-none ">...Xem chi tiết</a>
                            </div>
                            <a href="?ctr=product-detail&&id=<?=$value["idpro"]?>"
                                class="btn bg-secondary text-white rounded-6 fs-3 w-50 fw-semibold">Thêm</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <?php }?>
    </div>
</body>
<script src="./public/js/menu-scroll.js"></script>
<?php include_once ("./view/footer.php")?>