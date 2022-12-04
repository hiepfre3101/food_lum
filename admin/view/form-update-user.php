<?php require_once("./admin/view/header.php")?>
    <!-- end header -->

    <div class="form-add-product">
        <p class="title">Cập nhật thông tin</p>
        <form action="?ctr=admin-update-user&&id=<?=$_GET['id']?>" method="post" class="form-add" enctype="multipart/form-data">
            <div class="row-form">
                <div class="row-left"><label for="username">Tên tài khoản : </label></div>
                <div class="row-rigth">
                    <input type="text" value="<?=getOneDataUser($_GET['id'])['user_name']?>" name="user_name" id="username">
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <div class="row-form">
                <div class="row-left"><label for="fullname">Họ và tên : </label></div>
                <div class="row-rigth">
                    <input type="text" value="<?=getOneDataUser($_GET['id'])['full_name']?>" name="full_name" id="fullname">
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <div class="row-form">
                <div class="row-left"><label for="email">Email : </label></div>
                <div class="row-rigth">
                    <input type="text" readonly value="<?=getOneDataUser($_GET['id'])['email']?>" name="email" id="email">
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <div class="row-form">
                <div class="row-left"><label for="phone">Số điện thoại : </label></div>
                <div class="row-rigth">
                    <input type="text" value="<?=getOneDataUser($_GET['id'])['phone']?>" name="phone" id="phone">
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <div class="row-form">
                <div class="row-left"><label for="address">Địa chỉ : </label></div>
                <div class="row-rigth">
                    <input type="text" value="<?=getOneDataUser($_GET['id'])['address']?>" name="address" id="address">
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <div class="row-form">
                <div class="row-left"><label for="img-form">Ảnh : </label></div>
                <div class="row-rigth">
                    <label for="img-form" class="wrapper-img">
                        <img style="display: block;" src="<?=getOneDataUser($_GET['id'])['avatar']?>" alt="">
                    </label>
                    <input  type="file" style="transform: translateY(-100000px)" class="img-form" name="avatar" id="img-form" >
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <div class="row-form">
                <div class="row-left"><label for="password">Mật khẩu : </label></div>
                <div class="row-rigth">
                    <input type="text" value="<?=getOneDataUser($_GET['id'])['pass']?>" name="pass" id="password">
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <div class="row-form">
                <div class="row-left"><label for="repassword">Xác nhận mật khẩu : </label></div>
                <div class="row-rigth">
                    <input type="text" value="<?=getOneDataUser($_GET['id'])['pass']?>" name="name-product-add" id="repassword">
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>

            <button name="admin-add-user">Cập nhật</button>
        </form>
    </div>
    <script src="./public/js/validate.js"></script>
    <script>
        validator({
            form: ".form-add",
            erroSelector: ".form-message",
            rules: [
                validator.isRequired("#username"),
                validator.isRequired("#fullname"),
                validator.isRequired("#address"),
                validator.isRequired("#phone"),
                validator.isRequired("#password"),
                validator.isRequired("#repassword"),
                validator.isPasswordConfirm("#repassword", () => {
                    const pwd = document.querySelector("#password");
                    return pwd.value;
                })
            ]
        })
    </script>
<?php require_once("./admin/view/footer.php")?>