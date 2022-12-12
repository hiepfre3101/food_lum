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
         <p class="text-dark fw-semibold fs-1 title-orange position-relative ms-4">Đổi mật khẩu</p>
         <form enctype="multipart/form-data" method="post" action="?ctr=save-new-pass" class="mt-5 row" id="form-user">
            <div class="col-12 col-lg-7">
               <div class="form-group d-flex  align-items-center justify-content-start">
                  <label class="w-25">Mật khẩu cũ</label>
                  <div class="flex-fill ms-3">
                     <input type="password" name="password" id="password" class="form-control input-profile" >
                     <p class="form-message" style="color:red"><?=isset($_GET["fail"])?'Sai mật khẩu cũ':''?></p>
                  </div>
               </div>
               <div class="form-group d-flex align-items-center justify-content-start mt-3">
                  <label class="w-25">Mật khẩu mới</label>
                  <div class="flex-fill ms-3">
                     <input type="password" name="new_pass" id="newPass" class="form-control input-profile" >
                     <p class="form-message" style="color:red"></p>
                  </div>
               </div>
               <div class="form-group d-flex align-items-center justify-content-start mt-3">
                  <label class="w-25">Xác nhận mật khẩu mới</label>
                  <div class="flex-fill ms-3">
                     <input type="password" name="confirm-pass" id="confirmPass" class="form-control input-profile">
                     <p class="form-message" style="color:red"></p>
                  </div>
               </div>
               <button type="submit" class="btn-update mt-3">Lưu</button>
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
         validator.isRequired("#password"),
         validator.isRequired("#newPass"),
         validator.isRequired("#confirmPass"),
         validator.isPasswordConfirm("#confirmPass", ()=>{
            return document.querySelector("#newPass").value;
         })
      ]
   })
</script>
<?php include_once("./view/footer.php") ?>