<?php
include_once "database.php";
function addProduct($data = [])
{
    global $pdo;
    // các khai báo chuẩn bị sql đọc tại https://www.php.net/manual/en/pdostatement.execute.phps
    $query = "INSERT INTO products (product_name,product_price,descripton,image,iddm) VALUE (:product_name,:product_price,:descripton,:image,:iddm)";
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
    $query = "UPDATE product SET(product_name=:product_name,product_price=:product_price,descripton=:descripton,image=:image,iddm=:iddm)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}


