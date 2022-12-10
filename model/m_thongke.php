<?php
function loaddt(){
    global $pdo;
    $sql="SELECT SUM(total) as 'income' FROM order_user WHERE status = 3";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $countdt = $stmt->fetch();
    return $countdt;
}
function loaddm(){
    global $pdo;
    $sql="SELECT * FROM categories";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $countdm = $stmt->fetchAll();
    return $countdm;
}

?>