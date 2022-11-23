<?php
function showClientHome()
{
    $page = pageCount('products', 'idpro', '8');
    $arrProduct = pagination('products', '8');
    $arrCategory = getAllDataCategory();
    render("home", ["arrProduct"=>$arrProduct,"arrCategory"=>$arrCategory,"countPage"=>$page], 0);
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