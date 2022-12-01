<?php require_once("./admin/view/header.php")?>
    <!-- end header -->

    <div class="form-add-product">
        <p class="title">Thêm mới danh mục</p>
        <form action="?ctr=add-category-new" method="post" class="form-add" enctype="multipart/form-data">
            <div class="row-form">
                <div class="row-left"><label for="name-form">Tên danh mục: </label></div>
                <div class="row-rigth">
                    <input type="text" name="name-category-add" id="name-form">
                    <p class="form-message" style="color:red;"></p>
                </div>
            </div>
            <div class="row-form">
                <div class="row-left"><label for="img-form">Ảnh danh mục : </label></div>
                <div class="row-rigth">
                    <label for="img-form" class="wrapper-img" style="width: 100%;height: 200px">
                        <img src="https://picsum.photos/200/300" alt="">
                    </label>
                    <input  type="file" style="transform: translateY(-100000px)" class="img-form" name="img-category-add" id="img-form" >
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
                validator.isRequired("#img-form"),
            ]
        });
    </script>
<?php require_once("./admin/view/footer.php")?>