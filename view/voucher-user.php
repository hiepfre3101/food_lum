<?php include_once ("./view/header.php")?>
<link rel="stylesheet" href="./public/css/voucher.css">
    <div class="d-block d-lg-flex justify-content-between flex-wrap py-4 px-5 app">
       <div class="acc-wrapper  me-lg-5">
            <div class="profile-block w-100 d-flex align-items-center justify-content-start">
                <div class="">
                    <p class="fs-4 fw-semibold"><?php if(isset($_SESSION['idUser'])) 
                    echo getOneDataUser($_SESSION['idUser'])['user_name'];
                       else{
                         echo "<a href='?ctr=login'>Đăng nhập</a>";
                       }                    
                    ?>
                </p>
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
                      <a class="nav-link  fs-3 text-dark" aria-current="page" href="?ctr=voucher">Tất cả</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link fs-3 text-dark active-tab" href="?ctr=voucher-user">Của bạn</a>
                    </li>
                  </ul>
                 <div class="row mt-4">
                    <?php foreach($vouchers as $value):?>
                     <div class="col-lg-6 col-12 voucher shadow-lg d-flex justify-content-between mb-5">
                         <img src="./public/img/voucher<?php if($value['discount']>20){
                            echo "1";
                         }else{
                            echo "2";
                         }
                         ?>.jpg" alt="img" class="w-75 h-100">
                        <div class="d-flex align-items-center justify-content-center flex-fill flex-column">
                            <p class="fs-2 fw-bold text-red"><?= $value["discount"]?><span style="color: var(--secondary-color);">%</span></p>
                           <a href="?ctr=cart" class="d-block w-75"> <button class="w-100 h-100 btn-save fw-semibold fs-4 text-white" <?php if(!isset($_SESSION["idUser"]))echo "disabled";?>>Sử dụng ngay</button></a>
                            <p style="color:navy; cursor:pointer;" class="fs-5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tổng đơn tối thiểu 250000đ">Điều kiện</p>
                        </div>
                     </div>
                     <?php endforeach?>
                 </div> 
            </div>
       </div>
    </div>
<?php include_once("./view/footer.php")?>