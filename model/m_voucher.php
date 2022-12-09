<?php
require_once("database.php");
function getAllVoucher()
{
    global $pdo;
    $query = "SELECT *,DATEDIFF(exp_date,CURDATE())as 'exp' FROM voucher WHERE quantity>0";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
function getOneVoucher($id)
{
    global $pdo;
    $query = "SELECT * FROM voucher WHERE idvc=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}
function getAllVoucherUser($idUser)
{
    global $pdo;
    $query = "SELECT vc.exp_date,vc.discount,vc.content,vc.conditionVoucher,vcdt.id,vcdt.status ,vcdt.idvc,DATEDIFF(exp_date,CURDATE())as 'exp'
            FROM voucher_detail as vcdt 
            join voucher as vc 
            on vc.idvc = vcdt.idvc
            WHERE iduser=$idUser";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
//return : những voucher còn dùng được của 1 user
function getAllVoucherUserUseful($idUser)
{
    global $pdo;
    $query = "SELECT vc.discount,vc.content,vc.conditionVoucher,vcdt.id,vcdt.status 
            FROM voucher_detail as vcdt 
            join voucher as vc 
            on vc.idvc = vcdt.idvc
            WHERE iduser=$idUser AND vcdt.status = 0";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

function saveVoucherDetail($data)
{
    global $pdo;
    $query = "INSERT INTO voucher_detail (iduser,idvc,status) VALUES
             (?,?,?);";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}

function changeStatusVoucher($idVoucher, $idUser)
{
    global $pdo;
    $query = "UPDATE voucher_detail SET status = 1 WHERE id=$idVoucher AND iduser=$idUser";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}

function changeQuantityVoucher($idVoucher)
{
    global $pdo;
    $query = "UPDATE voucher SET  quantity= quantity-1 WHERE idvc=$idVoucher ";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}

function addDataVoucher($data){
    global $pdo;
    $query = "INSERT INTO voucher (quantity, discount, content, conditionVoucher,start_date ,exp_date) VALUE (:quantity, :discount, :content, :conditionVoucher,:start_date,:exp_date)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}

function deleteDataVoucher($id){
    global $pdo;
    $query = "DELETE FROM voucher WHERE idvc=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}
function deleteDataVoucherUser($id){
    global $pdo;
    $query = "DELETE FROM voucher_detail WHERE id=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}

