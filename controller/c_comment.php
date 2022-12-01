<?php
// function showCommentWithProduct()
// {
//     $arrComment = getCommentWithProduct();
    
//     render('comment', ['arrComment' => $arrComment], 1);
    
// }
function showDetailComment()
{
    $result = getOneProduct();
    $page = pageCount('comment', 'idcm', '5');
    $idpro = $_GET["idpro"];
    $cmt = getCommentByProductId($idpro);
    if (!is_array($cmt)) {
        $cmt = [];
    }
    render("detail-comment", ["cmt" => $cmt, "countPage" => $page, 'result' => $result,'idpro'=> $idpro] , 1);
}






// hiển thị phân trang
function showListComment()
{
    $page = pageCount('comment', 'idcm', '5');
    $arrComment = pagination('comment', '5');
    $arrComment = getCommentWithProduct();
    render("comment", ["arrComment" => $arrComment, "countPage" => $page], 1);
}

