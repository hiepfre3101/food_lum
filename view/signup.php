<?php include_once("./view/header.php") ?>
<link rel="stylesheet" href="./public/css/login.css">
<div class="container">
  <div class="row">
    <div class="col-lg-5 d-none d-lg-block">
      <img class="img-fluid h-100" src="./public/img/banner1.jpg" alt="">
    </div>
    <div class="col-lg-7 p-5">
      <div class="card-body">
        <h4 class="card-title mb-4">TẠO TÀI KHOẢN</h4>
        <form class="form-signup" action="?ctr=save-user" method="post">
          <div class="form-group">
            <label for="email" class="form-label">Tên tài khoản</label>
            <input name="user_name" class="form-control form-input" type="text" id="username">
            <p class="form-message"></p>
          </div> <!-- form-group// -->
          <div class="form-group">
            <label for="email" class="form-label">Họ và tên</label>
            <input name="full_name" class="form-control form-input" type="text" id="fullname">
            <p class="form-message"></p>
          </div> <!-- form-group// -->
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input name="email" class="form-control form-input" type="text" id="email">
            <p class="form-message"></p>
          </div> <!-- form-group// -->
          <div class="form-group">
            <label for="email" class="form-label">Số điện thoại</label>
            <input name="phone" class="form-control form-input" type="text" id="phone">
            <p class="form-message"></p>
          </div> <!-- form-group// -->
          <div class="form-group">
            <label for="email" class="form-label">Địa chỉ</label>
            <input name="address" class="form-control form-input" type="text" id="address">
            <p class="form-message"></p>
          </div> <!-- form-group// -->
          <div class="form-group">
            <label for="img-form" class="form-label">Hình ảnh</label>
            <div class="row-rigth">
              <label for="img-form" class="wrapper-img">
                <img src="https://picsum.photos/200/300" alt="" >
              </label>
              <input type="file" name="avatar" id="img-form">
              <p class="form-message" style="color:red;"></p>
            </div>
          </div> <!-- form-group// -->
          <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input name="pass" class="form-control form-input" type="password" id="password">
            <p class="form-message"></p>
          </div> <!-- form-group// -->
          <div class="form-group">
            <label for="password" class="form-label">Xác nhận mật khẩu</label>
            <input name="re-pass" class="form-control form-input" type="password" id="repassword">
            <p class="form-message"></p>
          </div> <!-- form-group// -->
          <br>
          <br> <!-- form-group form-check .// -->
          <div class="form-group">
            <button type="submit" class="btn btn-block dangky w-100"> Tạo Tài Khoản </button>
          </div> <!-- form-group// -->
        </form>
        <p class="text-center mt-4">Bạn đã có tài khoản? <a href="?ctr=login">Đăng nhập</a></p>
        <br>
        <br>
      </div> <!-- card-body.// -->

    </div>
  </div>
</div>
<script src="./public/js/validate.js"></script>
<script>
  validator({
    form: ".form-signup",
    erroSelector: ".form-message",
    rules: [
      validator.isRequired("#username"),
      validator.isRequired("#fullname"),
      validator.isRequired("#email"),
      validator.isRequired("#phone"),
      validator.isRequired("#password"),
      validator.isEmail("#email"),
      validator.isRequired("#repassword"),
      validator.isRequired('#img-form'),
      validator.isPasswordConfirm("#repassword", () => {
        const pwd = document.querySelector("#password");
        return pwd.value;
      })
    ]
  })
</script>
<script src="./public/js/main.js"></script>
<?php include_once("./view/footer.php") ?>