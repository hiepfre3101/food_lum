<?php require_once("header.php")?>
<!-- end header -->

<div class="form-add-product">
    <p class="title">Thêm mới sản phẩm</p>
    <form action="">
        <div class="row-form">
            <div class="row-left"><label for="name-form">Tên sản phẩm : </label></div>
            <div class="row-rigth"><input type="text" name="name-product-add" id="name-form"></div>
        </div>
        <div class="row-form">
            <div class="row-left"><label for="price-form">Giá sản phẩm : </label></div>
            <div class="row-rigth"><input type="number" name="price-product-add" id="price-form"></div>
        </div>
        <div class="row-form">
            <div class="row-left"><label for="category-form">Loại sản phẩm : </label></div>
            <div class="row-rigth">
                <select class="form-control" name="" id="category-form">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                </select>
            </div>
        </div>
        <div class="row-form">
            <div class="row-left"><label for="img-form">Ảnh sản phẩm : </label></div>
            <div class="row-rigth">
                <label for="img-form" class="wrapper-img">
                    <img src="../../public/img/slider1.jpg" alt="">
                </label>
                <input type="file" name="img-product-add" id="img-form" hidden>
            </div>
        </div>
        <div class="row-form">
            <div class="row-left"><label for="description-form">Mô tả sản phẩm : </label></div>
            <div class="row-rigth"><textarea name="description" id="description-form" cols="30" rows="10"></textarea></div>
        </div>
        <button>Thêm sản phảm</button>
    </form>
</div>
<?php require_once("footer.php")?>