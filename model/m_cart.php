<?php
function getCart(){
    if(isset($_SESSION['arrCart'])){
        return $_SESSION['arrCart'];
    }
  return "Hãy đặt các món ăn ngay nào !!";
}
function addCart($id,$quantity){
    $_SESSION['arrCart'][$id] = $quantity;
}
function deleteCartItem($id){
    unset($_SESSION['arrCart'][$id]);
}