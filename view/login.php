<?php include_once ("./view/header.php")?>
<link rel="stylesheet" href="./public/css/login.css">
<div class="container">
          <div class="row">
            <div class="col-lg-6">
              <img class="img1" src="https://static.kfcvietnam.com.vn/images/web/signin/lg/signin.jpg?v=4lY6yg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="card-body">
                    <h4 class="card-title mb-4">ĐĂNG NHẬP</h4>
                    <form>
                        <div class="form-group">
                            <label for="email" class="form-label">Địa chỉ email</label>
                            <input name="" class="form-control" type="text">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input name="" class="form-control" type="password">
                        </div> <!-- form-group// -->
    
                        <div class="form-group">
                            <a href="#" class="float-right">Quên mật khẩu?</a>
                            <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                                    class="custom-control-input" checked="">
                                <div class="custom-control-label"> Ghi nhớ tài khoản </div>
                            </label>
                        </div>
                        <br>
                        <br> <!-- form-group form-check .// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-block dangnhap"> Đăng nhập </button>
                        </div> <!-- form-group// -->
                    </form>
                    <h5 class="card-title1 mb-4">HOẶC TIẾP TỤC VỚI</h5>
                    <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp Đăng
                      nhập bằng facebook</a>
                  <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp Đăng nhập
                      bằng google</a>
                      <p class="text-center mt-4">Bạn chưa có tài khoản? <a href="#">Đăng ký</a></p>
                </div>
<?php include_once ("./view/footer.php")?>
