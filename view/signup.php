<?php include_once ("./view/header.php")?>
<link rel="stylesheet" href="./public/css/login.css">
<div class="container">
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block">
              <img class="img-fluid h-100" src="./public/img/banner1.jpg" alt="">
            </div>
            <div class="col-lg-7 p-5">
                <div class="card-body">
                    <h4 class="card-title mb-4">TẠO TÀI KHOẢN</h4>
                    <form class="form-signup">
                        <div class="form-group">
                            <label for="email" class="form-label">Tên tài khoản</label>
                            <input name="" class="form-control form-input" type="text" id="username">
                            <p class="form-message"></p>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                          <label for="email" class="form-label">Họ và tên</label>
                          <input name="" class="form-control form-input" type="text" id="fullname">
                          <p class="form-message"></p>
                      </div> <!-- form-group// -->
                      <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input name="" class="form-control form-input" type="text" id="email">
                        <p class="form-message"></p>
                    </div> <!-- form-group// -->
                    <div class="form-group">
                      <label for="email" class="form-label">Số điện thoại</label>
                      <input name="" class="form-control form-input" type="text" id="phone">
                      <p class="form-message"></p>
                    </div> <!-- form-group// -->
                        <div class="form-group">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input name="" class="form-control form-input" type="password" id="password">
                            <p class="form-message"></p>
                        </div> <!-- form-group// -->
    
                        <div class="form-group">                       
                            <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                                    class="custom-control-input" checked="">
                                <div class="custom-control-label"> Tôi đã đọc và đồng ý các chính sách của <strong>FOODLUM Việt Nam </strong></div>
                            </label>
                        </div>
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
    form:".form-signup",
    erroSelector: ".form-message",
    rules:[
        validator.isRequired("#username"),
        validator.isRequired("#fullname"),
        validator.isRequired("#email"),
        validator.isRequired("#phone"),
        validator.isRequired("#password"),
        validator.isEmail("#email"),
    ]
 })
</script>
<?php include_once ("./view/footer.php")?>