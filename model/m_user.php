<?php
include_once "database.php";
function addUser($data = [])
{
    global $pdo;
    $query = "INSERT INTO user (user_name,full_name,pass,email,phone,address,position) VALUE (:user_name,:full_name,:pass,:email,:phone,:address,:position)";
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

function updateUser($data=[])
{
//    không cho cập nhật email và
    global $pdo;
    $query = "UPDATE product SET(user_name=:user_name,full_name=:full_name,pass=:pass,phone=:phone,address=:address)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}

