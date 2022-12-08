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
                        <h4 class="card-title mb-4">QUÊN MẬT KHẨU</h4>
                        <form class="form-rePass" action="?ctr=check-email" method="post">
                            <div class="form-group">
                                <label for="email" class="form-label">Email đăng kí</label>
                                <input name="email" value="<?=isset($_GET['email'])?$_GET['email']:""?>" class="form-control form-input" type="email" id="email">
                                <p class="form-message"
                                   style="color: red"><?=isset($_GET['fail'])?"email không tồn tại trên hệ thống":""?></p>
                            </div> <!-- form-group// -->
                            <br>
                            <br> <!-- form-group form-check .// -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-block dangnhap w-100">Lấy lại mật khẩu</button>
                            </div> <!-- form-group// -->
                        </form>
                        <p class="text-center mt-4">Bạn chưa có tài khoản? <a href="?ctr=sign-up">Đăng ký</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/validate.js"></script>
    <script>
        validator({
            form: ".form-rePass",
            erroSelector: ".form-message",
            rules: [
                validator.isRequired("#email"),
            ]
        })
    </script>
    <script src="./public/js/main.js"></script>
<?php include_once("./view/footer.php") ?>