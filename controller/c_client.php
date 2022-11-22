<?php
function showClientHome()
{
    $arrProduct = getAllDataProducts();
    $arrCategory = getAllDataCategory();
    render("home", ["arrProduct"=>$arrProduct,"arrCategory"=>$arrCategory], 0);
}

function showClientCart()
{
    render("cart", [], 0);
}

function showLogin()
{
    render("login", [], 0);
}
function showSignup()
{
    render("signup", [], 0);
}

?>