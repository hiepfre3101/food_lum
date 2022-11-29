<?php
 function saveAddComment(){
     extract($_POST);
     $time_send = date("Y-m-d");
     $content=$_POST['content'];
     $idpro=$_POST['idpro'];
     $iduser=$_SESSION["idUser"]['iduser'];
     $data = [
         "content" => $content,
         "iduser" => $iduser,
         "idpro" => $idpro,
         "time_send" => $time_send,
     ];
     if (trim($content) == "") {
         header("location:?ctr=product-detail&idpro=$idpro");
         die;
     }
     addComment($data);
     header("location:?ctr=product-detail&idpro=$idpro");

  }
// function saveAddComment(){
//     if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
//         $content=$_POST['content'];
//         $idpro=$_POST['idpro'];
//         $iduser=$_SESSION['idUser']['iduser'];
//         $time_send = date("Y-m-d");
//         insert_binhluan($content,$iduser,$idpro,$time_send);
//     }
// }

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