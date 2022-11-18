<?php
include_once("./view/header.php");
?>
<link rel="stylesheet" href="./public/css/user-home.css">
<div class="container-fluid bg-dark py-4">
    <div class="d-flex align-items-center justify-content-center">
        <div class="w-60 justify-content-md-end d-flex flex-wrap justify-content-sm-start">
            <div class="d-flex justify-content-end align-items-center h-100 me-3">
                <i class="fa-solid fa-location-dot text-gray fs-4"></i>
                <span class="ms-3 text-white fw-semibold fs-4">Giao hàng tận nơi: </span>
                <span class="ms-3 text-white fw-semibold fs-4">Hà Đông</span>
            </div>
            <div class=" d-flex justify-content-start align-items-center">
                <i class="fa-solid fa-clock text-gray fs-4"></i>
                <span class="ms-2 text-white fw-semibold fs-4">Giao ngay</span>
            </div>
        </div>
        <div class="ms-4 w-40 d-flex justify-content-xs-end align-items-center">
            <button role="button" class=" rounded-5 text-white bg-transparent btn-outline-white px-3 py-2 fs-4 fw-bold">Thay
                đổi</button>
        </div>
    </div>
</div>
<div id="carouselHeroInterval" class="carousel slide overflow-hidden carousel-size " data-bs-ride="carousel">
    <div class="carousel-inner h-100">
        <a class="carousel-item active h-100" data-bs-interval="4000" href="#">
            <img src="./public/img/slider1.jpg" class="d-block img-fluid img-fit" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>First slide label</h3>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </a>
        <a class="carousel-item h-100" data-bs-interval="4000" href="#">
            <img src="./public/img/slider4.jpg" class="d-block img-fluid img-fit" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>First slide label</h3>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </a>
        <a class="carousel-item h-100" data-bs-interval="4000" href="#">
            <img src="./public/img/slider3.jpg" class="d-block img-fluid img-fit" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>First slide label</h3>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </a>
    </div>
    <button class="carousel-control-prev position-absolute top-50 ms-5 translate-middle rounded-4 bg-overlay-dark h-10 w-10 btn-prev" type="button" data-bs-target="#carouselHeroInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon text-white" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next top-50 end-0 translate-middle bg-overlay-dark rounded-4 h-10 w-10 float-end" type="button" data-bs-target="#carouselHeroInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon text-white" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="grid-block w-100 p-5">
    <h1 class="d-flex align-items-center"><span class="fw-semibold fs-1">DANH MỤC MÓN ĂN</span>
        <p class="title-line flex-fill"></p>
    </h1>
    <div class="row mt-5">
        <div class="col-xxl-2 col-lg-3 col-6 col-sm-4  mb-5 rounded-6">
            <div class="card rounded-6 overflow-hidden shadow-sm">
                <div class="overflow-hidden"> <img src="./public/img/silder2.jpg" class="card-img-top img-col rounded-top-6" alt="..."></div>
                <div class="card-body">
                    <a href="#" class="d-flex justify-content-start align-items-center fs-3 fw-bold text-dark text-uppercase">MÓN
                        MỚI</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-6 col-sm-4  mb-5 rounded-6">
            <div class="card rounded-6 overflow-hidden shadow-sm">
                <div class="overflow-hidden"> <img src="./public/img/silder2.jpg" class="card-img-top img-col rounded-top-6" alt="..."></div>
                <div class="card-body">
                    <a href="#" class="d-flex justify-content-start align-items-center fs-3 fw-bold text-dark text-uppercase">MÓN
                        MỚI</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-6 col-sm-4  mb-5 rounded-6">
            <div class="card rounded-6 overflow-hidden shadow-sm">
                <div class="overflow-hidden"> <img src="./public/img/silder2.jpg" class="card-img-top img-col rounded-top-6" alt="..."></div>
                <div class="card-body">
                    <a href="#" class="d-flex justify-content-start align-items-center fs-3 fw-bold text-dark text-uppercase">MÓN
                        MỚI</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-6 col-sm-4  mb-5 rounded-6">
            <div class="card rounded-6 overflow-hidden shadow-sm">
                <div class="overflow-hidden"> <img src="./public/img/silder2.jpg" class="card-img-top img-col rounded-top-6" alt="..."></div>
                <div class="card-body">
                    <a href="#" class="d-flex justify-content-start align-items-center fs-3 fw-bold text-dark text-uppercase">MÓN
                        MỚI</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="grid-block w-100 p-5">
    <h1 class="d-flex align-items-center">
        <img src="./public/img/gif1.gif" alt="..." class="w-10">
        <span class="fw-semibold fs-1">CÓ THỂ BẠN SẼ THÍCH MÓN NÀY</span>
        <p class="title-line flex-fill"></p>
    </h1>
    <div class="row">
        <div class="col-xxl-2 col-lg-3 col-6 col-sm-4 mb-5">
            <div class="card w-100 shadow" style="width: 18rem;">
                <a class="overflow-hidden" href="#">
                    <img src="./public/img/slider5.jpg" class="card-img-top img-col" alt="...">
                </a>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title fs-3 fw-bold">Card title</h5>
                        <h5 class="card-title fs-3">220.000 <span>đ</span></h5>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn bg-secondary text-white rounded-6 fs-3 w-50 fw-semibold">Thêm</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-6 col-sm-4 mb-5">
            <div class="card w-100 shadow" style="width: 18rem;">
                <a class="overflow-hidden" href="#">
                    <img src="./public/img/slider5.jpg" class="card-img-top img-col" alt="...">
                </a>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title fs-3 fw-bold">Card title</h5>
                        <h5 class="card-title fs-3">220.000 <span>đ</span></h5>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn bg-secondary text-white rounded-6 fs-3 w-50 fw-semibold">Thêm</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-6 col-sm-4 mb-5">
            <div class="card w-100 shadow" style="width: 18rem;">
                <a class="overflow-hidden" href="#">
                    <img src="./public/img/slider5.jpg" class="card-img-top img-col" alt="...">
                </a>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title fs-3 fw-bold">Card title</h5>
                        <h5 class="card-title fs-3">220.000 <span>đ</span></h5>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn bg-secondary text-white rounded-6 fs-3 w-50 fw-semibold">Thêm</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-6 col-sm-4 mb-5">
            <div class="card w-100 shadow" style="width: 18rem;">
                <a class="overflow-hidden" href="#">
                    <img src="./public/img/slider5.jpg" class="card-img-top img-col" alt="...">
                </a>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title fs-3 fw-bold">Card title</h5>
                        <h5 class="card-title fs-3">220.000 <span>đ</span></h5>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn bg-secondary text-white rounded-6 fs-3 w-50 fw-semibold">Thêm</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-6 col-sm-4 mb-5">
            <div class="card w-100 shadow" style="width: 18rem;">
                <a class="overflow-hidden" href="#">
                    <img src="./public/img/slider5.jpg" class="card-img-top img-col" alt="...">
                </a>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title fs-3 fw-bold">Card title</h5>
                        <h5 class="card-title fs-3">220.000 <span>đ</span></h5>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn bg-secondary text-white rounded-6 fs-3 w-50 fw-semibold">Thêm</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-6 col-sm-4 mb-5">
            <div class="card w-100 shadow" style="width: 18rem;">
                <a class="overflow-hidden" href="#">
                    <img src="./public/img/slider5.jpg" class="card-img-top img-col" alt="...">
                </a>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title fs-3 fw-bold">Card title</h5>
                        <h5 class="card-title fs-3">220.000 <span>đ</span></h5>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn bg-secondary text-white rounded-6 fs-3 w-50 fw-semibold">Thêm</a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 d-flex justify-content-center align-items-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true" class="fs-3 text-orange">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link fs-3 text-orange" href="#">1</a></li>
                <li class="page-item"><a class="page-link fs-3 text-orange" href="#">2</a></li>
                <li class="page-item"><a class="page-link fs-3 text-orange" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true" class="fs-3 text-orange">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<?php
include_once("./view/footer.php");
?>