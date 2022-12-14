<?php
function showClientHome()
{
    $page = pageCount('products', 'idpro', '8');
    $arrProduct = pagination('products', '8');
    $arrCategory = getAllDataCategory();
    $arrSlider = getAllDataSlider();
    render("home", ["arrProduct"=>$arrProduct,"arrCategory"=>$arrCategory,"countPage"=>$page,"arrSlider"=>$arrSlider], 0);
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

function getInfoHeader(){
    if(isset($_SESSION["arrCart"])){
        $countCart = count($_SESSION["arrCart"]);
        $userInfo = getOneDataUser($_SESSION["idUser"]);
    }else if(isset($_SESSION["idUser"])){
        $userInfo = getOneDataUser($_SESSION["idUser"]);
        $countCart=0;
    }else{
        $userInfo = [];
        $countCart=0;
    }
    render("header",["countCart"=>$countCart,"userInfo"=>$userInfo],0);
}

function showMenuClient(){
    $arrCategory = getAllDataCategory();
    $arrProductEachCategory =[];
    foreach($arrCategory as $value){
        $products = getAllProductWithCategory($value["iddm"]);
        array_push($arrProductEachCategory,$products);
    }
    render("menu",["arrCategory"=>$arrCategory,"arrProductEachCategory"=>$arrProductEachCategory],0);
}
?>