<?php
function getCart(){
    return $_SESSION['arrCart'];
}
function addCart($id,$quantity){
    $_SESSION['arrCart'][$id] = [$quantity];
}
function deleteCartItem($id){
    unset($_SESSION['arrCart'][$id]);
}