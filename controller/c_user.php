<?php
function signUp(){
    $data = [
        "user_name" => $_POST['user_name'],
        "full_name" => $_POST['full_name'],
        "pass" => $_POST['pass'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "address" => $_POST['address'],
        "position" => 0
    ];
    addUser($data);
    header("location:index.php");
}
function signIn($userName,$password){
    $arrUser = getAllDataUser();
    foreach ($arrUser as $value){
        if($userName == $value['user_name']){
            if($password == $value['pass']){
                $_SESSION['idUser'] = $value['iduser'];
                if($value['position'] == 0){
                    header("location:index.php?ctr=home");
                }else{
                    header("location:index.php?ctr=user-list");
                }
            }
        }else{
            header("location:index.php?ctr=login&&fail=sai thông tin");
        }
    }
}

function logOunt(){
    unset($_SESSION['idUser']);
    header("location:index.php?ctr=home");
}

function showListUser(){
    render("admin",[],1);
}