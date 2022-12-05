<?php
include_once("./view/header.php");
?>
<link rel="stylesheet" href="./public/css/user-home.css">
<div>
    <div id="carouselHeroInterval" class="carousel slide overflow-hidden carousel-size " data-bs-ride="carousel">
        <div class="carousel-inner h-100">
            <?php for ($i = 0; $i < count($arrSlider); $i++){?>
            <a class="carousel-item <?=($i==0)?"active":""?> h-100" data-bs-interval="4000" href="#">
                <img src="<?=$arrSlider[$i]['image']?>" class="d-block img-fluid img-fit" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3><?=$arrSlider[$i]['title']?></h3>
                    <p><?=$arrSlider[$i]['description']?></p>
                </div>
            </a>
            <?php }?>
        </div>
        <button class="carousel-control-prev position-absolute top-50 ms-5 translate-middle rounded-4  h-10 w-10 btn-prev" type="button" data-bs-target="#carouselHeroInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon text-white fs-1 fw-bold" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next top-50 end-0 translate-middle  rounded-4 h-10 w-10 float-end" type="button" data-bs-target="#carouselHeroInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon text-white fs-1 fw-bold" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="grid-block w-100 p-5">
        <h1 class="d-flex align-items-center"><span class="fw-semibold fs-1">DANH MỤC MÓN ĂN</span>
            <p class="title-line flex-fill"></p>
        </h1>
        <!--danh mục sản phẩm-->
        <div class="row mt-5">
            <?php for($i=0;$i<count($arrCategory);$i++) { ?>
                <div class="col-xxl-2 col-lg-3 col-6 col-sm-4  mb-5 rounded-6">
                    <div class="card rounded-6 overflow-hidden shadow-sm">
                        <!--Đang sử dụng đường dẫn ảnh tamj thời cần chinh ảnh său khi làm phần admin-->
                        <div class="overflow-hidden"><img src="<?= $arrCategory[$i]['image'] ?>" class="card-img-top img-col rounded-top-6" alt="..."></div>
                        <div class="card-body">
                            <a href="?ctr=menu#menu-<?=$i+1?>" class="d-flex justify-content-start align-items-center fs-3 fw-bold text-dark text-uppercase"><?= $arrCategory[$i]['categories_name'] ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="grid-block w-100 p-5">
        <h1 class="d-flex align-items-center">
            <img src="./public/img/gif1.gif" alt="..." class="w-10">
            <span class="fw-semibold fs-1">CÓ THỂ BẠN SẼ THÍCH MÓN NÀY</span>
            <p class="title-line flex-fill"></p>
        </h1>
        <!--hiển thị sản phẩm cũng là dùng đường dẫn ảnh tạm thời chỉnh sửa sau-->
        <div class="row" id="product-list-1">
            <?php foreach ($arrProduct as $value) { ?>
                <div class="col-xxl-2 col-lg-3 col-12 col-sm-4 mb-5">
                    <div class="card w-100 shadow product" style="width: 18rem;">
                        <a class="overflow-hidden" href="?ctr=product-detail&&id=<?= $value['idpro'] ?>">
                            <img src="<?= getImg($value['idpro'])[0]['src'] ?>" class="card-img-top img-col img-product" alt="...">
                        </a>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between ">
                                <h5 class="card-title fs-3 fw-bold overflow-hidden mw-100"><?= $value['product_name'] ?></h5>
                                <h5 class="card-title fs-3"><?= $value['product_price'] ?><span>đ</span></h5>
                            </div>
                            <div class="d-lg-flex align-items-center justify-content-start d-none">
                                <p class="card-text overflow-hidden mh-50 mw-50"><?= $value['descripton'] ?></p>
                                <a href="?ctr=product-detail&&id=<?= $value['idpro'] ?>" class="fs-4 text-decoration-none ">...Xem chi tiết</a>
                            </div>
                            <a href="?ctr=product-detail&&id=<?= $value['idpro'] ?>" class="btn bg-secondary text-white rounded-6 fs-3 w-50 fw-semibold">Thêm</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div style="<?php if($countPage == 1)echo "display:none;"?>">
    <div class="pagination">
        <div class="pagination-left">
            <a href="<?php if (isset($_GET['page']) && $_GET['page'] >= 2) {
                            $count = $_GET['page'];
                            $count -= 1;
                            echo "?ctr=home&&page=$count#product-list-1";
                        } ?>">
                <span class="material-symbols-outlined">
                    navigate_before
                </span>
            </a>
        </div>
        <div class="box-pagination">
            <?php for ($item = 1; $item <= $countPage; $item++) { ?>
                <div class="pagination-item
                                <?php if (empty($_GET['page'])) {
                                    if ($item == 1) {
                                        echo "active";
                                    }
                                } else if ($item == $_GET['page']) {
                                    echo "active";
                                } ?>">
                    <a href="<?= "?ctr=home&&page=$item" ?>#product-list-1"><?= $item ?></a>
                </div>
            <?php } ?>
        </div>
        <div class="pagination-right">
            <a href="<?php
                        if (isset($_GET['page']) && $_GET['page'] < $countPage) {
                            $count = $_GET['page'];
                            $count += 1;
                            echo "?ctr=home&&page=$count#product-list-1";
                        }
                        if (!isset($_GET['page'])) {
                            echo "?ctr=home&&page=2#product-list-1";
                        }
                        ?>">
                <span class="material-symbols-outlined">
                    navigate_next
                </span>
            </a>
        </div>
    </div>
</div>
</div>
</div>
<?php include_once("./view/footer.php") ?>