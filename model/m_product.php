<?php
include_once "database.php";
function addProduct($data = [])
{
    global $pdo;
    // các khai báo chuẩn bị sql đọc tại https://www.php.net/manual/en/pdostatement.execute.phps
    $query = "INSERT INTO products (idpro,product_name,product_price,descripton,image,iddm) VALUE (:idpro,:product_name,:product_price,:descripton,:image,:iddm)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}

function deleteProduct($id)
{
    global $pdo;
    $query = "DELETE FROM products WHERE idpro=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}

function updateProduct($data=[])
{
    global $pdo;
    $query = "UPDATE products SET product_name=:product_name,product_price=:product_price,descripton=:descripton,image=:image,iddm=:iddm WHERE idpro=:idpro";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}
function getAllDataProducts(){
    global $pdo;
    $query = "SELECT * FROM products";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}
function getOneDataProducts($id){
    global $pdo;
    $query = "SELECT * FROM products WHERE idpro=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}

// đếm số bản gi trong bảng product
function countProduct()
{
    global $pdo;
    $query = "SELECT COUNT(idpro) AS 'count' FROM products";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $count = $stmt->fetch();
    return $count[0];
}
// lấy id cuối cùng của bảng product
function getIdProduct()
{
    global $pdo;
    $query = "SELECT idpro FROM products ORDER BY idpro DESC LIMIT 1;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $id = $stmt->fetch();
    return $id[0];
}
// thểm ảnh vào bảng ảnh
function addImg($data = []){
    global $pdo;
    $query = "INSERT INTO img_product (idpro, src) VALUE (:idpro, :src)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}

// lấy các ảnh cùng sản phẩm
function getImg($id){
    global $pdo;
    $query = "SELECT src FROM img_product WHERE idpro = $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $arrImg = $stmt->fetchAll();
    return $arrImg;
}

function getAllProductWithCategory($idCate){
    global $pdo;
    $query = "SELECT p.*,cate.categories_name
    FROM products as p
    JOIN categories as cate
    ON p.iddm = cate.iddm
    WHERE p.iddm = $idCate";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}