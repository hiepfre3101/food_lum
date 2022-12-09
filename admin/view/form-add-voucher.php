<?php require_once("./admin/view/header.php") ?>
    <!-- end header -->

    <div class="form-add-product">
        <p class="title">Thêm voucher</p>
        <form action="?ctr=admin-add-voucher" method="post" class="form-add" enctype="multipart/form-data">
            <div class="row-form">
                <div class="row-left"><label for="discount">Số % giảm giá : </label></div>
                <div class="row-rigth">
                    <select class="form-control" name="discount" id="discount">
                        <option value="">Chọn % giảm giá</option>
                        <option value="5">Giảm 5% tổng đơn hàng</option>
                        <option value="10">Giảm 10% tổng đơn hàng</option>
                        <option value="15">Giảm 15% tổng đơn hàng</option>
                        <option value="20">Giảm 20% tổng đơn hàng</option>
                        <option value="25">Giảm 25% tổng đơn hàng</option>
                        <option value="30">Giảm 30% tổng đơn hàng</option>
                    </select>
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <div class="row-form">
                <div class="row-left"><label for="quantity">Số Lượng : </label></div>
                <div class="row-rigth">
                    <input type="number" name="quantity" id="quantity">
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <div class="row-form">
                <div class="row-left"><label for="conditionVoucher">Điều kiện : </label></div>
                <div class="row-rigth">
                    <input type="number" name="conditionVoucher" id="conditionVoucher">
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <div class="row-form">
                <div class="row-left"><label for="exp_date">Ngày bắt đầu: </label></div>
                <div class="row-rigth">
                    <input type="date" name="start_date" id="exp_date">
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <div class="row-form">
                <div class="row-left"><label for="exp_date">Ngày hết hạn : </label></div>
                <div class="row-rigth">
                    <input type="date" name="exp_date" id="exp_date">
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <button>Thêm voucher</button>
        </form>
    </div>
    <script src="./public/js/validate.js"></script>
    <script>
        validator({
            form: ".form-add",
            erroSelector: ".form-message",
            rules: [
                validator.isRequired("#discount"),
                validator.isRequired("#quantity"),
                validator.isRequired("#conditionVoucher"),
                validator.isRequired("#exp_date"),
            ]
        })
    </script>
<?php require_once("./admin/view/footer.php") ?>