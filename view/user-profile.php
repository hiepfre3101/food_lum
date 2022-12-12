<?php include_once("./view/header.php") ?>
<link rel="stylesheet" href="./public/css/voucher.css">
<div>
   <div class=" row app w-100 px-5 py-4">
      <div class="col-lg-3 col-10 acc-wrapper">
         <div class="profile-block w-100 d-flex align-items-center justify-content-start">
            <div class="d-flex justify-content-start">
               <?php if (isset($_SESSION['idUser'])) {
                  echo "<img class='rounded-circle img-block img-block-small me-5' src =" . getOneDataUser($_SESSION['idUser'])['avatar'] . "></img>";
                  echo "<div><p class='fs-4 fw-semibold'>" . getOneDataUser($_SESSION['idUser'])['user_name'] . "</p>";
                  echo "<a href='#' class='text-decoration-none text-gray d-flex justify-content-start align-items-center fs-5 text-gray'><i class='fa-solid fa-pencil'></i> Sửa hồ sơ</a></div>";
               } else {
                  echo "<a href='?ctr=login'>Đăng nhập</a>";
               }
               ?>
            </div>
         </div>
         <nav class="d-flex flex-column justify-content-center mt-5">
            <a href="#" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-regular fa-user me-2 "></i><span class="text-dark link-orange">Tài khoản của tôi</span></a>
            <a href="?ctr=order-user" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-regular fa-user me-2 "></i><span class="text-dark link-orange">Đơn hàng của tôi</span></a>
            <a href="?ctr=voucher-user" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-solid fa-ticket-simple me-2 "></i><span class="text-dark link-orange">Kho Voucher</span></a>
         </nav>
      </div>
      <div class="list-wrapper col-lg-9 col-12 p-5 ">
         <p class="text-dark fw-semibold fs-1 title-orange position-relative ms-4">Hồ sơ của tôi</p>
         <form enctype="multipart/form-data" method="post" action="?ctr=save-update-user" class="mt-5 row" id="form-user">
            <div class="col-12 col-lg-7">
               <div class="form-group d-flex  justify-content-start">
                  <label class="w-25">Tên đăng nhập</label>
                  <div class="flex-fill ms-3">
                     <input type="text" name="user_name" id="username" readonly class="form-control input-not-border input-profile" value="<?= $user["user_name"] ?>">
                     <p class="form-message"></p>
                  </div>
               </div>
               <div class="form-group d-flex align-items-center justify-content-start">
                  <label class="w-25">Tên</label>
                  <div class="flex-fill ms-3">
                     <input type="text input-not-border" name="full_name" id="fullname" class="form-control input-profile" value="<?= $user["full_name"] ?>">
                     <p class="form-message"></p>
                  </div>
               </div>
               <div class="form-group d-flex align-items-center justify-content-start">
                  <label class="w-25">Email</label>
                  <div class="flex-fill ms-3">
                     <input type="text input-not-border" name="email" id="email" class="form-control input-profile" value="<?= $user["email"] ?>">
                     <p class="form-message"></p>
                  </div>
               </div>
               <div class="form-group d-flex align-items-center justify-content-start">
                  <label class="w-25">Số điện thoại</label>
                  <div class="flex-fill ms-3">
                     <input type="text input-not-border" name="phone" id="phone" class="form-control input-profile" value="<?= $user["phone"] ?>">
                     <p class="form-message"></p>
                  </div>
               </div>
               <div class="form-group d-flex align-items-center justify-content-start">
                  <label class="w-25">Địa chỉ</label>
                  <div class="flex-fill ms-3">
                     <input type="text input-not-border" name="address" id="address" class="form-control input-profile" value="<?= $user["address"] ?>">
                     <p class="form-message"></p>
                  </div>
               </div>
               <a href="?ctr=change-pass" class="fs-3 d-flex justify-content-end p-2">Đổi mật khẩu</a>
               <button type="submit" class="btn-update">Lưu</button>
            </div>
            <div class="col-12 col-lg-5 px-3">
               <div class="form-group d-flex justify-content-center align-items-center flex-column">
                  <img src="<?= $user["avatar"] ?>" class=" rounded-circle img-block">
                  <input type="file" class="ms-2 w-30 mt-4" name="avatar" id="avatar">
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<script src="./public/js/validate.js"></script>
<script type="text/javascript">
   validator({
      form:"#form-user",
      erroSelector:".form-message",
      rules:[
         validator.isRequired("#username"),
         validator.isRequired("#fullname"),
         validator.isRequired("#phone"),
         validator.isRequired("#email"),
         validator.isRequired("#address"),
         validator.isEmail("#email"),
      ]
   })
</script>
<?php include_once("./view/footer.php") ?>