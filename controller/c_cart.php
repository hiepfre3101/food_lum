<?php
function displayCart(){
    $id = $_GET['id'];
    $quantity = $_POST['quantity'];
    addCart($id,$quantity);
    $arrCarrt = getCart();
    render("cart",["arrCart"=>$arrCarrt],0);
}