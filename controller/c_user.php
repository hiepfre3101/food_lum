<?php
function signUp(){
    $data = [
        "user_name" => $_POST['user_name'],
        "full_name" => $_POST['full_name'],
        "pass" => $_POST['pass'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "address" => $_POST['address'],
        "position" => 0,
        "avatar" => "./public/img/".$_FILES["avatar"]["name"]
    ];
    addUser($data);
    move_uploaded_file($_FILES["avatar"]["tmp_name"],"./public/img/".$_FILES["avatar"]["name"]);
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
                    break;
                }else{
                    header("location:index.php?ctr=product-list");
                    break;
                }
            }
        }else{
            header("location:index.php?ctr=login&&fail=sai thông tin");
        }
    }
}

function logOunt(){
    unset($_SESSION['idUser']);
    unset($_SESSION['arrCart']);//Xóa giỏ hàng của từng user
    header("location:index.php?ctr=home");
}

function showListUser(){
    render("admin",[],1);
}

function showUserProfile(){
    if(isset($_SESSION["idUser"])){
        $user = getOneDataUser($_SESSION["idUser"]);
         render("user-profile",["user"=>$user],0);
         die;
    }
   render('login',[],0);
}

function saveUpdateUser(){
    extract($_POST);
    $avatar="";
    $user = getOneDataUser($_SESSION["idUser"]);
    $avatarSize = $_FILES["avatar"]["size"];
    if($avatarSize == 0){
      $avatar = $user["avatar"];
    }else{
        $avatar ="./public/img/".$_FILES["avatar"]["name"];
    }
    move_uploaded_file($_FILES["avatar"]["tmp_name"],"public/img/".$_FILES["avatar"]["name"]);
    $data =[
       $user_name,
       $full_name,
       $phone,
       $address,
       $avatar
    ];
    updateUser($data);
    header("location:?ctr=user-profile");
}