<?php
function showListCategory(){
    $countPage = pageCount('categories','iddm','5');
    $arrCategories = pagination('categories','5');
    render("categories",["arrCategories"=>$arrCategories,"countPage"=>$countPage],1);
}

function showFormAddCategory(){
    render("form-add-category",[],1);
}

function addCategory(){
    $nameCategory = $_POST['name-category-add'];
    $img = $_FILES['img-category-add'];
    $imgName = "./public/img/".$img['name'];
    $data = [
        "categories_name"=>$nameCategory,
        "image"=>$imgName
    ];
    addDataCategory($data);
    move_uploaded_file($img['tmp_name'],$imgName);
    showListCategory();
}
function showFormUpdate(){
    render("form-update-category",[],1);
}

function updateCategory(){
    $img = $_FILES['img-category-add'];
    $imgName = "./public/img/".$img['name'];
    $nameCategory = $_POST['img-category-add'];
    $id = $_GET['id'];
    if($img['size'] > 0){
        $data = [
            "categories_name"=>$nameCategory,
            "image"=>$imgName,
            "iddm"=>$id
        ];
        move_uploaded_file($img['tmp_name'],$imgName);
    }else{
        $data = [
            "categories_name"=>$nameCategory,
            "iddm"=>$id
        ];
    }
    updateDataCategory($data);
    showListCategory();
}

function showDetailCategory(){
    $arrProducts = getAllProductCategory($_GET['id']);
    $categories = getAllDataCategory();
    render("detail-category",["arrProducts"=>$arrProducts,"categories"=>$categories],1);
}

function updateAllCategoryProduct(){
//    mảng lấy được qua form gửi
    $arrPost = $_POST;
    $categoryMain = $_POST['category'];
//    lấy các sản phẩm được check để thanh đổi danh mục
    $arrAllProduct = getAllDataProducts();// lấy mảng tất cả sản phẩm dùng vòng lặp kiểm tra xem id nào được check
    foreach ($arrPost as $key => $value){//key ở đây sẽ là id của sản phẩm còn value sẽ là trạng thái của ô input
        if($value=='on'){
            foreach ($arrAllProduct as $keyProdutc => $valueProduct){
                if($valueProduct['idpro'] == $key){
                    updateDataCategoryProduct($categoryMain,$key);
                }
            }
        }
    }
    $location = $_GET['id'];
    header("location:index.php?ctr=detail-category&&id=$location#table1");
}
function updateOneCategoryProduct(){
    $arrProduct = getAllDataProducts();
    foreach ($arrProduct as $value){
        $nameCategoryName = 'category-'.$value['idpro'];
        $valueCategory = $_POST["$nameCategoryName"];
        updateDataCategoryProduct($valueCategory,$value['idpro']);
    }
    $location = $_GET['id'];
    header("location:index.php?ctr=detail-category&&id=$location#table1");
}

function deleteCategory($id){
    $code = deleteDataCategory($id);
    if($code[0] == 23000){
        // mã lỗi khôgn thực hiện dc câu lệnh do ràng buộc nếu có lỗi này điều hướng về lại trnag chi tết của danh mục để thực hiện chuyển các sản phẩm đang ở danh mục này sang danh mục khác
        header("location:index.php?ctr=detail-category&&id=$id&&erro#erro-message");
    }else{
        showListCategory();
    }
}