<?php include_once("./view/header.php") ?>
<link rel="stylesheet" href="./public/css/voucher.css">
<div>
   <div class=" row app w-100 px-5 py-4">
      <div class="col-lg-3 col-10 acc-wrapper">
         <div class="profile-block w-100 d-flex align-items-center justify-content-start">
            <div class="d-flex justify-content-start">
               <?php if (isset($_SESSION['idUser'])) {
                  echo "<img class='rounded-circle  me-5 img-block img-block-small' src =" . getOneDataUser($_SESSION['idUser'])['avatar'] . "></img>";
                  echo "<div><p class='fs-4 fw-semibold'>" . getOneDataUser($_SESSION['idUser'])['user_name'] . "</p>";
                  echo "<a href='#' class='text-decoration-none text-gray d-flex justify-content-start align-items-center fs-5 text-gray'><i class='fa-solid fa-pencil'></i> Sửa hồ sơ</a></div>";
               } else {
                  echo "<a href='?ctr=login'>Đăng nhập</a>";
               }
               ?>
            </div>
         </div>
         <nav class="d-flex flex-column justify-content-center mt-5">
            <a href="?ctr=user-profile" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-regular fa-user me-2 "></i><span class="text-dark link-orange">Tài khoản của tôi</span></a>
            <a href="?ctr=order-user" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-regular fa-user me-2 "></i><span class="text-dark link-orange">Đơn hàng của tôi</span></a>
            <a href="?ctr=voucher-user" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-solid fa-ticket-simple me-2 "></i><span class="text-dark link-orange">Kho Voucher</span></a>
         </nav>
      </div>
      <div class="list-wrapper col-lg-9 col-12 p-5 ">
         <p class="text-dark fw-semibold fs-1 title-orange position-relative ms-4">Kho Voucher</p>
         <div class="mt-5">
            <ul class="nav nav-pills">
               <li class="nav-item">
                  <a class="nav-link active-tab fs-3 text-dark" aria-current="page" href="#">Tất cả</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link fs-3 text-dark" href="?ctr=voucher-user">Của bạn</a>
               </li>
            </ul>
            <div class="row mt-4" >
               <?php foreach ($vouchers as $value) : ?>
                  <div class="col-lg-6 col-12 voucher shadow-lg d-flex justify-content-between mb-5">
                     <img src="./public/img/voucher<?php if ($value['discount'] > 20) {
                                                      echo "1";
                                                   } else {
                                                      echo "2";
                                                   }
                                                   ?>.jpg" alt="img" class="w-75 h-100">
                     <div class="d-flex align-items-center justify-content-center flex-fill flex-column">
                        <p class="fs-2 fw-bold text-red"><?= $value["discount"] ?><span style="color: var(--secondary-color);">%</span></p>
                        <a href="?ctr=save-user-voucher&idVoucher=<?= $value['idvc'] ?>" class="d-block w-75"> 
                          <button class="w-100 h-100 btn-save fw-semibold fs-4 text-white" 
                           <?php if (!isset($_SESSION["idUser"]) || getTotalMoney($value['start_date'],$value['exp_date'])["total"] < $value["conditionVoucher"]||$value["exp"]<0) 
                             echo "disabled"; 
                             ?>
                           >
                          Lưu
                          </button>
                        </a>
                        <p class="fs-4 text-dark">Số lượng: <span class=""><?= $value["quantity"] ?></span></p>
                        <p class="fs-5 text-orange">HSD: <span class=""><?= $value["exp_date"] ?></span></p>
                        <p style="color:navy; cursor:pointer;" class="fs-4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tổng tiền tích lũy tối thiểu <?= $value["conditionVoucher"] ?>đ">Điều kiện</p>
                     </div>
                  </div>
               <?php endforeach ?>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include_once("./view/footer.php") ?>