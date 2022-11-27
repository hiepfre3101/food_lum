<?php

function showClientProductDetail()
{
    if(isset($_SESSION['idUser'])){
         $id = $_GET['id'];
    $product = getOneDataProducts($id);
    render("product-detail", ["product" => $product], 0);
    }
    render("login", [], 0);
}

function showAddProduct()
{
    $categories = getAllDataCategory();
    render("form-add-product", ["categories" => $categories], 1);
}

//hiển thị sản phẩm phân trang
function showListProduct()
{
    $page = pageCount('products', 'idpro', '5');
    $arrProduct = pagination('products', '5');
    render("product", ["arrProducts" => $arrProduct, "countPage" => $page], 1);
}

function addNewProduct(){
    $name = $_POST['name-product-add'];
    $price = $_POST['price-product-add'];
    $desc = $_POST['description'];
    $imgMain = $_FILES['img-product-add'];
    $img = "./public/img/".$imgMain['name'];
    move_uploaded_file($imgMain['tmp_name'],$img);
    $iddm = $_POST['category'];
    $data =[
        "product_name"=>$name,
        "product_price"=>$price,
        "descripton"=>$desc,
        "image"=>$img,
        "iddm"=>$iddm
    ];

    addProduct($data);
    header("location:index.php?ctr=product-list");
}

?>