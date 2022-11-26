<?php
function getCart(){
    if(isset($_SESSION['arrCart'])){
        return $_SESSION['arrCart'];
    }
  return "Hãy đặt các món ăn ngay nào !!";
}
// cập nhật dữ liệu cho mảng mới nhất
function setArrCart($arr = []){
    $_SESSION['arrCart'] = $arr;
}
function addCart($id,$quantity){
    $_SESSION['arrCart'][$id] = $quantity;
}
function deleteCartItem($id){
    unset($_SESSION['arrCart'][$id]);
}