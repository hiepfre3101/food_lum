<?php
include_once "database.php";
function addDataCategory($data=[]){
    global $pdo;
    $query = "INSERT INTO categories (categories_name,image) VALUE (:categories_name,:image)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}
function deleteDataCategory($iddm){
    global $pdo;
    $query = "DELETE FROM categories WHERE iddm=$iddm";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $pdo->exec($query);// trả về mảng các lỗi của câu lện truy vấn vị trí thứ nhất trả về mã lỗi được xác định tiêu chuẩn vị trí thứ 2 trảe về mã lỗi của trình duyệt vị trí thứ 3 trả về message dành riêng cho trình duyệt
    return $pdo->errorInfo();
}
function updateDataCategory($data=[]){
    global $pdo;
    if(sizeof($data) == 2){
        $query = "UPDATE categories SET categories_name=:categories_name WHERE iddm=:iddm";
    }else{
        $query = "UPDATE categories SET categories_name=:categories_name,image=:image WHERE iddm=:iddm";
    }
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}
function getAllDataCategory(){
    global $pdo;
    $query = "SELECT * FROM categories";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function getOneDataCategory($id){
    global $pdo;
    $query = "SELECT * FROM categories WHERE iddm=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}

?>