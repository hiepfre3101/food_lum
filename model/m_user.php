<?php
include_once "database.php";
function addUser($data = [])
{
    global $pdo;
    $query = "INSERT INTO user (user_name,full_name,pass,email,phone,address,position,avatar) VALUE (:user_name,:full_name,:pass,:email,:phone,:address,:position,:avatar)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}

function deleteUser($id)
{
    global $pdo;
    $query = "DELETE FROM user WHERE iduser=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}

function updateUser($data = [])
{
//    không cho cập nhật email và position
// cập nhật password riêng để tìm hiểu php mailer đã !
$iduser = $_SESSION["idUser"];
    global $pdo;
    $query = "UPDATE user SET user_name=?, full_name=?, phone=?, address=?, avatar=? where iduser=$iduser";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}
function updateUser2($data = [])
{
//    không cho cập nhật email và position
// cập nhật password riêng để tìm hiểu php mailer đã !
    global $pdo;
    if (isset($data['avatar'])){
        $query = "UPDATE user SET user_name=:user_name, full_name=:full_name, phone=:phone,pass=:pass, address=:address, avatar=:avatar where iduser=:iduser";
    }else{
        $query = "UPDATE user SET user_name=:user_name, full_name=:full_name, phone=:phone,pass=:pass, address=:address where iduser=:iduser";
    }
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}

function getAllDataUser()
{
    global $pdo;
    $query = "SELECT * FROM user";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function getOneDataUser($id)
{
    global $pdo;
    $query = "SELECT * FROM user WHERE iduser = $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}

function updateDataPass($pass,$id){
    global $pdo;
    $query = "UPDATE user SET pass=$pass where iduser=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}

function checkDataEmail($email){
    global $pdo;
    $query = "SELECT iduser FROM user WHERE email = '$email'";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}

function getAllDataClient(){
    global $pdo;
    $query = "SELECT * FROM user where position = 0";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}


