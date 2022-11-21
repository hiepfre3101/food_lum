<?php

function showClientProductDetail()
{
    $id = $_GET['id'];
    $product = getOneDataProducts($id);
    render("product-detail", ["product"=>$product], 0);
}
?>