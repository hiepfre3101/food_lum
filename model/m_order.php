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
    $query = "SELECT *
    FROM `order_user` 
    WHERE idorder =$id";
    $stmt = $pdo->prepare($query);  
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}
function getDataOrderOption($id,$status)
{
    global $pdo;
    $query = "SELECT *
    FROM `order_user` 
    WHERE id_user =$id AND status = $status"; // xem csdl để biết ý nghĩa của status
    $stmt = $pdo->prepare($query);  
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

function addDataOrder($data = [])
{
    global $pdo;
    $query = "INSERT INTO order_user (idorder,id_user, date_time, total, status) VALUE (:idorder,:id_user, :date_time, :total, '1')";
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
    $query = "SELECT products.idpro,product_name,product_price,quantity,idorder FROM products INNER JOIN order_detail ON products.idpro = order_detail.idpro AND idorder=$id";
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

function getTotalMoney($start,$end){
    global $pdo;
  if(isset($_SESSION["idUser"])){
    $id = $_SESSION["idUser"];
    $query = "SELECT SUM(ou.total) as 'total' from order_user as ou
    WHERE ou.date_time BETWEEN '$start' and '$end' AND ou.id_user = $id and ou.status =3";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
  }
}

function deleteOrder($id){
    global $pdo;
    $query = "DELETE FROM order_user WHERE id_user=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}