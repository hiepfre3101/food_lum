<?php
function showListCategory(){
    $countPage = pageCount('categories','iddm','5');
    $arrCategories = pagination('categories','5');
    render("categories",["arrCategories"=>$arrCategories,"countPage"=>$countPage],1);
}

function showFormAddCategory(){
    render("form-add-category",[],1);
}

function addCategory(){
    $nameCategory = $_POST['name-category-add'];
    $img = $_FILES['img-category-add'];
    $imgName = "./public/img/".$img['name'];
    $data = [
        "categories_name"=>$nameCategory,
        "image"=>$imgName
    ];
    addDataCategory($data);
    move_uploaded_file($img['tmp_name'],$imgName);
    showListCategory();
}
function showFormUpdate(){
    render("form-update-category",[],1);
}

function updateCategory(){
    $img = $_FILES['img-category-add'];
    $imgName = "./public/img/".$img['name'];
    $nameCategory = $_POST['img-category-add'];
    $id = $_GET['id'];
    if($img['size'] > 0){
        $data = [
            "categories_name"=>$nameCategory,
            "image"=>$imgName,
            "iddm"=>$id
        ];
        move_uploaded_file($img['tmp_name'],$imgName);
    }else{
        $data = [
            "categories_name"=>$nameCategory,
            "iddm"=>$id
        ];
    }
    updateDataCategory($data);
    showListCategory();
}