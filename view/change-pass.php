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
                        <h4 class="card-title mb-4">NHẬP MẬT KHẨU MỚI</h4>
                        <form class="form-change-pass" action="?ctr=save-change-pass" method="post">
                            <input type="text" name="idUserChangePass" value="<?=$idUserChagePass[0]?>" hidden>
                            <div class="form-group">
                                <label for="otp" class="form-label">Nhập mật khẩu mới</label>
                                <input name="pass" class="form-control form-input" type="password" id="password">
                                <p class="form-message"
                                   style="color: red"><?= isset($_GET['fail']) ? "Mã xác thực không chính xác" : "" ?></p>
                            </div> <!-- form-group// -->
                            <br>
                            <div class="form-group">
                                <label for="otp" class="form-label">Nhập lại mật khẩu mới</label>
                                <input name="repass" class="form-control form-input" type="password" id="repassword">
                                <p class="form-message"
                                   style="color: red"><?= isset($_GET['fail']) ? "Mã xác thực không chính xác" : "" ?></p>
                            </div>
                            <br> <!-- form-group form-check .// -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-block dangnhap w-100">Lấy lại mật khẩu</button>
                            </div> <!-- form-group// -->
                        </form>
                        <p class="text-center mt-4">Bạn chư nhận được mã? <a href="?ctr=sign-up">Gửi lại</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/validate.js"></script>
    <script>
        validator({
            form: ".form-change-pass",
            erroSelector: ".form-message",
            rules: [
                validator.isRequired("#password"),
                validator.isRequired("#repassword"),
                validator.isPasswordConfirm("#repassword", () => {
                    const pwd = document.querySelector("#password");
                    return pwd.value;
                })
            ]
        })
    </script>
    <script src="./public/js/main.js"></script>
<?php include_once("./view/footer.php") ?>