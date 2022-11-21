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

