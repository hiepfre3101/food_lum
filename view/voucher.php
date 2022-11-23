<?php include_once ("./view/header.php")?>
<link rel="stylesheet" href="./public/css/voucher.css">
    <div class="d-block d-lg-flex justify-content-between flex-wrap py-4 px-5 app">
       <div class="acc-wrapper  me-lg-5">
            <div class="profile-block w-100 d-flex align-items-center justify-content-start">
                <img src="./public/img/logo3.png" alt="" class="avatar rounded-circle">
                <div class="">
                    <p class="fs-4 fw-semibold">hiepfe3110</p>
                    <a href="#" class="text-decoration-none text-gray d-flex justify-content-start align-items-center fs-5 text-gray"><i class="fa-solid fa-pencil"></i> Sửa hồ sơ</a>
                </div>
            </div>
            <nav class="d-flex flex-column justify-content-center mt-5">
               <a href="#" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-regular fa-user me-2 "></i><span class="text-dark link-orange">Tài khoản của tôi</span></a>
               <a href="#" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-solid fa-ticket-simple me-2 "></i><span class="text-dark link-orange">Kho Voucher</span></a>
            </nav>
       </div>
       <div class="list-wrapper w-80 p-5 flex-fill">
            <p class="text-dark fw-semibold fs-1 title-orange position-relative ms-4">Kho Voucher</p>
            <div class="mt-5">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link active-tab fs-3 text-dark" aria-current="page" href="#">Mới nhất</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link fs-3 text-dark" href="#">Đã sử dụng</a>
                    </li>
                  </ul>
                 <div class="row mt-4">
                     <div class="col-lg-6 col-12 voucher shadow-lg d-flex justify-content-between mb-5">
                         <img src="./public/img/voucher1.jpg" alt="img" class="w-75 h-100">
                        <div class="d-flex align-items-center justify-content-center flex-fill flex-column">
                            <p class="fs-2 fw-bold text-red">20 <span style="color: var(--secondary-color);">%</span></p>
                            <button class="w-75 btn-save fw-semibold fs-4 text-white">Lưu</button>
                            <p class="fs-4 text-dark">Số lượng: <span class="">10</span></p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-12 voucher shadow-lg d-flex justify-content-between mb-5">
                         <img src="./public/img/voucher1.jpg" alt="img" class="w-75 h-100">
                         <div class="d-flex align-items-center justify-content-center flex-fill flex-column">
                            <p class="fs-2 fw-bold text-red">20 <span style="color: var(--secondary-color);">%</span></p>
                            <button class="w-75 btn-save fw-semibold fs-4 text-white">Lưu</button>
                            <p class="fs-4 text-dark">Số lượng: <span class="">10</span></p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-12 voucher shadow-lg d-flex justify-content-between mb-5">
                         <img src="./public/img/voucher2.jpg" alt="img" class="w-75 h-100">
                        <div class="d-flex align-items-center justify-content-center flex-fill flex-column">
                            <p class="fs-2 fw-bold text-red">20 <span style="color: var(--secondary-color);">%</span></p>
                            <button class="w-75 btn-save fw-semibold fs-4 text-white">Lưu</button>
                            <p class="fs-4 text-dark">Số lượng: <span class="">10</span></p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-12 voucher shadow-lg d-flex justify-content-between mb-5">
                         <img src="./public/img/voucher2.jpg" alt="img" class="w-75 h-100">
                         <div class="d-flex align-items-center justify-content-center flex-fill flex-column">
                            <p class="fs-2 fw-bold text-red">20 <span style="color: var(--secondary-color);">%</span></p>
                            <button class="w-75 btn-save fw-semibold fs-4 text-white">Lưu</button>
                            <p class="fs-4 text-dark">Số lượng: <span class="">10</span></p>
                        </div>
                     </div>
                 </div> 
            </div>
       </div>
    </div>
<?php include_once("./view/footer.php")?>