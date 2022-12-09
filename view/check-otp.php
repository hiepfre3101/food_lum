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
                        <h4 class="card-title mb-4">NHẬP MÃ OTP 6 CHỮ SỐ</h4>
                        <form class="form-check-otp" action="?ctr=check-otp" method="post">
                            <input type="text" value="<?=$_GET['iduser']?>" name="iduser" hidden>
                            <div class="form-group">
                                <label for="otp" class="form-label">Bạn có 10 phút để nhập mã vui lòng không tắt trình duyệt</label>
                                <input name="otp" class="form-control form-input" type="number" id="otp">
                                <p class="form-message"
                                   style="color: red"><?=isset($_GET['fail'])?"Mã xác thực không chính xác":""?></p>
                            </div> <!-- form-group// -->
                            <br>
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
            form: ".form-check-otp",
            erroSelector: ".form-message",
            rules: [
                validator.isRequired("#otp"),
            ]
        })
    </script>
    <script src="./public/js/main.js"></script>
<?php include_once("./view/footer.php") ?>