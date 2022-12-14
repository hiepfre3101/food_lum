<?php

function showDetailComment()
{
    $idpro = $_GET["idpro"];
    $result = getOneProduct($idpro);
    $page = pageCount('comment', 'idcm', '5');
    $cmt = getCommentByProductId($idpro);
    if (!is_array($cmt)) {
        $cmt = [];
    }
    render("detail-comment", ["idpro" => $idpro,"cmt" => $cmt, "countPage" => $page, 'result' => $result,'idpro'=> $idpro] , 1);
}

// hiển thị phân trang
function showListComment()
{
    $page = pageCount('comment', 'idcm', '5');
    $arrComment = pagination('comment', '5');
    $arrComment = getCommentWithProduct();
    render("comment", ["arrComment" => $arrComment, "countPage" => $page], 1);
}


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
// delete comment
function deleteAllComment()
{
    if (isset($_GET['idDelete'])) {
        deleteComment($_GET['idDelete']);
        header("location:index.php?ctr=comment-list");
    } 
   
}
?>
