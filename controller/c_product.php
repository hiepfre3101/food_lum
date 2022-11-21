<?php

function showClientProductDetail()
{
    $id = $_GET['id'];
    $product = getOneDataProducts($id);
    render("product-detail", ["product"=>$product], 0);
}
function showAddProduct(){
    $categories = getAllDataCategory();
    render("form-add-product",["categories"=>$categories],1);
}
?>