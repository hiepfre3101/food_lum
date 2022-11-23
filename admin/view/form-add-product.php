<?php require_once("./admin/view/header.php")?>
<!-- end header -->

<div class="form-add-product">
    <p class="title">Thêm mới sản phẩm</p>
    <form action="" class="form-add">
        <div class="row-form">
            <div class="row-left"><label for="name-form">Tên sản phẩm : </label></div>
            <div class="row-rigth">
                <input type="text" name="name-product-add" id="name-form">
                <p class="form-message" style="color:red;"></p>
            </div>
        </div>
        <div class="row-form">
            <div class="row-left"><label for="price-form">Giá sản phẩm : </label></div>
            <div class="row-rigth">
                <input type="number" name="price-product-add" id="price-form">
                <p class="form-message" style="color:red;"></p>
            </div>
        </div>
        <div class="row-form">
            <div class="row-left"><label for="category-form">Loại sản phẩm : </label></div>
            <div class="row-rigth">
                <select class="form-control" name="" id="category-form">
                    <option value="">Chon loai san pham</option>
                    <?php foreach($categories as $value):?>
                        <option value="<?=$value["iddm"]?>"><?=$value["categories_name"]?></option>
                    <?php endforeach?>
                </select>
                <p class="form-message" style="color:red;"></p>
            </div>
        </div>
        <div class="row-form">
            <div class="row-left"><label for="img-form">Ảnh sản phẩm : </label></div>
            <div class="row-rigth">
                <label for="img-form" class="wrapper-img">
                    <img src="https://picsum.photos/200/300" alt="">
                </label>
                <input  type="file" style="transform: translateY(-100000px)" name="img-product-add" id="img-form" >
                <p class="form-message" style="color:red;"></p>
            </div>
        </div>
        <div class="row-form">
            <div class="row-left"><label for="description-form">Mô tả sản phẩm : </label></div>
            <div class="row-rigth">
                <textarea name="description" id="description-form" cols="30" rows="10"></textarea>
                <p class="form-message" style="color:red;"></p>
            </div>
        </div>
        <button>Thêm sản phảm</button>
    </form>
</div>
<script src="./public/js/validate.js"></script>
<script>
    validator({
       form:".form-add",
       erroSelector:".form-message",
       rules:[
           validator.isRequired("#name-form"),
           validator.isRequired("#price-form"),
           validator.isRequired("#category-form"),
           validator.isRequired("#img-form"),
           validator.isRequired("#description-form"),
       ]
    });
</script>
<?php require_once("./admin/view/footer.php")?>