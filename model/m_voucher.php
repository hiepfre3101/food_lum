<?php
require_once ("database.php");
function getAllVoucher(){
    global $pdo;
    $query = "SELECT * FROM voucher";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
function getOneVoucher($id){
    global $pdo;
    $query = "SELECT * FROM voucher WHERE idvc=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}
function getAllVoucherUser($idUser){
    global $pdo;
   $query = "SELECT vc.discount, vc.content,vcdt.id,vcdt.status 
            FROM voucher_detail as vcdt 
            join voucher as vc 
            on vc.idvc = vcdt.idvc
            WHERE iduser=$idUser";
   $stmt = $pdo->prepare($query);
   $stmt->execute();
   $data = $stmt->fetchAll();
   return $data;
   //Find solve tab Ui at Của bạn tab in voucher.php
}

function saveVoucherDetail($data){
  global $pdo;
  $query = "INSERT INTO voucher_detail (iduser,idvc,status) VALUES
             (?,?,?);";
   $stmt = $pdo->prepare($query);
   $stmt->execute($data);           
}
