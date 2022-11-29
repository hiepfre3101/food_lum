<?php

 function showCommentWithProduct(){
    $result = getCommentWithProduct();
    render('comment', ['result' => $result], 1);
}

function showCmtByProduct($id){
    $product = getOneDataProducts($id);
    $id = $_GET["id"];
    $cmt = getCommentByProductId($id);
    if (!is_array($cmt)) {
        $cmt = [];
    }
    render("product-detail", ["cmt" => $cmt, "product" => $product], 0);
}

?>