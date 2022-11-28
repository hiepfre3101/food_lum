<?php
include_once "database.php";
function getAllCategories(){
    global $pdo;
    $query = "SELECT * FROM categories";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

function getOneCategories($id){
    global $pdo;
    $query = "SELECT * FROM categories WHERE iddm = $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}
function addDataCategories($data = []){
    global $pdo;
    $query = "INSERT INTO categories(categories_name, image) VALUE (:categories_name, :image)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}
