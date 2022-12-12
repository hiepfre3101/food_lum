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
    $email =$data['email'];
    $_SESSION["valueInput"] = $data;
    if(!empty(checkDataEmail($email))){
        header("location:index.php?ctr=sign-up&fail");
    }else {
        unset($_SESSION["valueInput"]);
        addUser($data);
        move_uploaded_file($_FILES["avatar"]["tmp_name"],"./public/img/".$_FILES["avatar"]["name"]);
        if(isset($_POST['admin-add-user'])){
            header("location:index.php?ctr=user-list");
        }else{
            header("location:index.php");
        }
    }

}
function signIn($userName,$password){
    $arrUser = getAllDataUser();
    foreach ($arrUser as $value){
        if($userName == $value['email']){
            if($password == $value['pass']){
                $_SESSION['idUser'] = $value['iduser'];
                if($value['position'] == 0){
                    header("location:?ctr=menu");
                    break;
                }else{
                    header("location:index.php?ctr=adminhome");
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
    $arrUser = pagination2('user','5','position','0');
    $pageCount = pageCount2('user','iduser','5','position','0');
    render("admin",["arrUser"=>$arrUser,"countPage"=>$pageCount],1);
}
// hiển thị form update bên admin
function formUpdateUser(){
    render("form-update-user",[],1);
}
function adminUpdateUser(){
    $idUser = $_GET['id'];
    $data = [
        "user_name" => $_POST['user_name'],
        "full_name" => $_POST['full_name'],
        "phone" => $_POST['phone'],
        "address" => $_POST['address'],
        "avatar" => "./public/img/".$_FILES["avatar"]["name"],
        "pass" => $_POST['pass'],
        "iduser"=>$idUser
    ];
    if($_FILES["avatar"]['size'] == 0){
        unset($data['avatar']);
    }
    updateUser2($data);
    header("location:index.php?ctr=detail-user&&id=$idUser");
}

function showUserProfile(){
    if(isset($_SESSION["idUser"])){
        $user = getOneDataUser($_SESSION["idUser"]);
         render("user-profile",["user"=>$user],0);
         die;
    }
   render('login',[],0);
}
function showChangePass(){
    if(isset($_SESSION["idUser"])){
         render("change_pass",[],0);
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

function showDetailUser(){
    render('detail-user',[],1);
}
function showFormAddUser(){
    render('form-add-user',[],1);
}
function adminDeleteUser()
{
    if (isset($_GET['idDelete'])) {
        deleteUser($_GET['idDelete']);
    } else {
        $arrUser = getAllDataUser();
        foreach ($_POST as $key => $value) {
            if ($value == "on") {
                foreach ($arrUser as $valueUser) {
                    if ($valueUser['iduser'] = $key) {
                        deleteUser($valueUser['iduser']);
                    }
                }
            }
        }
    }
    header("location:index.php?ctr=user-list");
}

function showRepasssword(){
    render('re-password',[],0);
}

function checkCookie(){
    if($_POST['otp'] == $_COOKIE['otp']){
        // lấy dc iduser muốn đổi pass
        $idUserChagePass = $_POST['iduser'];
        render('change-pass',["idUserChagePass"=>$idUserChagePass],0);
    }else{
        header("location:index.php?ctr=enter-otp&&fail");
    }
}
function showFormOtp(){
    render('check-otp',[],0);
}
function showFormCheckEmail(){
    $email = $_POST['email'];
    if(empty(checkDataEmail($email))){
        header("location:index.php?ctr=re-pass&&fail&&email=$email");
    }else {
        $idUser = checkDataEmail($email)['iduser'];
        header("location:mail/send_mail.php?email=$email&&iduser=$idUser");
    }
}

function saveChangePass(){
    $passBefore = $_POST["password"];
    $idUser = $_SESSION["idUser"];
    $user = getOneDataUser($idUser);
    if($passBefore != $user["pass"]){
        header("location:?ctr=change-pass&fail");
        die;
    };
    $newPass = $_POST["new_pass"];
    updateDataPass($newPass,$idUser);
    logOunt();
    header("location:index.php?ctr=login");
}

function changePass(){
    $pass =$_POST['pass'];
    $idUser = $_POST['idUserChangePass'];
    updateDataPass($pass,$idUser);
    header("location:index.php?ctr=login");
}
//in progress :)
