<?php
require_once("database.php");
function getAllDataOrder()
{
    global $pdo;
    $query = "SELECT * FROM order_user";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
function getOneDataOrder($id)
{
    global $pdo;
    $query = "SELECT od.*, vc.discount
    FROM `order_user` as od
    JOIN voucher_detail as vcdt 
    on od.idvc_detail = vcdt.id
    JOIN voucher as vc
    on vcdt.idvc = vc.idvc
    WHERE idorder =$id";
    $stmt = $pdo->prepare($query);  
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}

function addDataOrder($data = [])
{
    global $pdo;
    $query = "INSERT INTO order_user (idorder,id_user, date_time, total, status,idvc_detail) VALUE (:idorder,:id_user, :date_time, :total, '1',:idvc_detail)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}
// đếm số bản gi trong bảng order
function countOrder()
{
    global $pdo;
    $query = "SELECT COUNT(idorder) AS 'count' FROM order_user";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $count = $stmt->fetch();
    return $count[0];
}
// lấy id cuối cùng của bảng order
function getIdOrder()
{
    global $pdo;
    $query = "SELECT idorder FROM order_user ORDER BY idorder DESC LIMIT 1;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $id = $stmt->fetch();
    return $id[0];
}

// thêm dữ liệu vào bảng order_detail
function addDataOrderDetail($data = [])
{
    global $pdo;
    $query = "INSERT INTO order_detail (idpro, idorder, quantity) VALUE (:idpro, :idorder, :quantity)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}

// lấy các sản phẩm trong đơn hàng
function getAllDataOrderDetail($idorder)
{
    global $pdo;
    $query = "SELECT * FROM order_detail WHERE idorder=$idorder";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

// lấy dữ liệu từ bảng product và order_detail
function productDetailOrder($id)
{
    global $pdo;
    $query = "SELECT product_name,product_price,quantity,idorder FROM products INNER JOIN order_detail ON products.idpro = order_detail.idpro AND idorder=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
function getUserOrder($idUser)
{
    global $pdo;
    $query = "SELECT * FROM order_user
             WHERE id_user = $idUser";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
function changeStatusOrder($id, $status)
{
    global $pdo;
    $query = "UPDATE order_user SET status = $status WHERE idorder=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}
