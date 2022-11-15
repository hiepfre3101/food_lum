<?php
require_once 'config.php';

$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=UTF8";

try {
    $pdo = new PDO($dsn, DB_USER, DB_PWD);
} catch (PDOException $e) {
    echo $e->getMessage();
}

// thực thi câu lệnh truy vấn
function connect($query)
{
    global $pdo;
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt;
}

// lấy ra tất cả dữ liệu
function getAll($query)
{
    $data = connect($query)->fetchAll();
    return $data;
}

// lấy ra 1 bản gi;
function getOnce($query)
{
    $data = connect($query)->fetch();
    return $data;
}