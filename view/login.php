<?php include_once("./view/header.php") ?>
<link rel="stylesheet" href="./public/css/login.css">
<div>
    <div class="container-fluid container-lg p-0">
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block">
                <img class="img-fluid h-100" src="./public/img/banner1.jpg" alt="">
            </div>
            <div class="col-lg-7 p-5">
                <div class="card-body">
                    <h4 class="card-title mb-4">ĐĂNG NHẬP</h4>
                    <form class="form-login" action="?ctr=check-login" method="post">
                        <div class="form-group">
                            <label for="email" class="form-label">Tài khoản</label>
                            <input name="username" class="form-control form-input" type="text">
                            <p class="form-message" style="color: red"><?= isset($_GET['fail']) ? "Sai tên đăng nhập hoặc mật khẩu" : "" ?></p>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input name="password" class="form-control form-input" type="password">
                            <p class="form-message" style="color: red"><?= isset($_GET['fail']) ? "Sai tên đăng nhập hoặc mật khẩu" : "" ?></p>
                        </div> <!-- form-group// -->

                        <div class="form-group">
                            <a href="#" class="float-right">Quên mật khẩu?</a>
                        </div>
                        <br>
                        <br> <!-- form-group form-check .// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-block dangnhap w-100"> Đăng nhập </button>
                        </div> <!-- form-group// -->
                    </form>
                    <p class="text-center mt-4">Bạn chưa có tài khoản? <a href="?ctr=sign-up">Đăng ký</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("./view/footer.php") ?>