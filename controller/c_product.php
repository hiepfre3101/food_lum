<?php

function showClientProductDetail()
{
    if(isset($_SESSION['idUser'])){
         $id = $_GET['id'];
    $product = getOneDataProducts($id);
    render("product-detail", ["product" => $product], 0);
    die;
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

?>