<?php
include_once "database.php";
function addCategory($data=[]){
    global $pdo;
    $query = "INSERT INTO categories (categories_name,image) VALUE (:categories_name,:image)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}
function deleteCategory($iddm){
    global $pdo;
    $query = "DELETE FROM categories WHERE iddm=$iddm";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}
function updateCategory($data=[]){
    global $pdo;
    $query = "UPDATE categories SET categories_name=:categories_name,image=:image WHERE iddm=:iddm";
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
?>