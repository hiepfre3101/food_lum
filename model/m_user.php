<?php
include_once "database.php";
function addUser($data = [])
{
    global $pdo;
    $query = "INSERT INTO user (user_name,full_name,pass,email,phone,address,position) VALUE (:user_name,:full_name,:pass,:email,:phone,:address,:position)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}
$data = [
    "user_name" => "Dương",
    "full_name" => "Nguyễn Ánh Dương",
    "pass" => "123123",
    "email" => "duongna1603@gmail.com",
    "phone" => "0388989077",
    "address" => "Hà tây",
    "position" => '1'
];
addUser($data);

function deleteUser($id)
{
    global $pdo;
    $query = "DELETE FROM user WHERE iduser=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}

function updateUser($data = [])
{
//    không cho cập nhật email và
    global $pdo;
    $query = "UPDATE product SET(user_name=:user_name,full_name=:full_name,pass=:pass,phone=:phone,address=:address)";
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


