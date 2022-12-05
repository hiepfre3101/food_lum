<?php
include_once "database.php";
function getAllDataSlider(){
    global $pdo;
    $query = "SELECT * FROM slide";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
function deleteDataSlider($id){
    global $pdo;
    $query = "DELETE FROM slide WHERE id=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}
function addDataSlider($data = []){
    global $pdo;
    $query = "INSERT INTO slide ( image, title, description) VALUE (:image, :title, :description)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}
function updateDataSlider($data = []){
    global $pdo;
    if(count($data) == 4){
        $query = "UPDATE slide SET image=:image, title=:title, description=:description Where id=:id";
    }else{
        $query = "UPDATE slide SET title=:title, description=:description Where id=:id";
    }
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}
