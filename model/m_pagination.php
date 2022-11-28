<?php
require_once("database.php");
function pagination($table, $end)
{
    global $pdo;
//    $end ở đây hiểu là số lượng bản gi muốn lấy ra
//    công thức tính để lấy được điểm bắt đầu sẽ là = ( số bản gi )*(số tang - 1);
    isset($_GET['page']) ? $page = $_GET['page'] : $page = 1;
    $start = $end * ($page - 1);
    $query = "SELECT * FROM $table LIMIT $start,$end";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $arr = $stmt->fetchAll();
    return $arr;
}

function pageCount($table, $columName,$item)
{
    global $pdo;
    //$item là số lượng bản gi muốn lấy ra trên 1 trang nó tương tự với $end ởt hàm pagination() ở trên
//    tính xem có bao nhiêu trang công thức = $item / số bản gi lấy ra (kết quả được làm tròn lên ceil)
    $query = "SELECT COUNT($columName) AS 'page' FROM $table";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $count = $stmt->fetch();
//    $count trả về 1 mảng
    $result = $count['page'] / $item;
//    làm tròn lên kết quả
    return ceil($result);
}

function pagination2($table, $end,$status)
{
    global $pdo;
//    $end ở đây hiểu là số lượng bản gi muốn lấy ra
//    công thức tính để lấy được điểm bắt đầu sẽ là = ( số bản gi )*(số tang - 1);
    isset($_GET['page']) ? $page = $_GET['page'] : $page = 1;
    $start = $end * ($page - 1);
    $query = "SELECT * FROM $table WHERE status=$status LIMIT $start,$end";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $arr = $stmt->fetchAll();
    return $arr;
}

function pageCount2($table, $columName,$item,$status)
{
    global $pdo;
    //$item là số lượng bản gi muốn lấy ra trên 1 trang nó tương tự với $end ởt hàm pagination() ở trên
//    tính xem có bao nhiêu trang công thức = $item / số bản gi lấy ra (kết quả được làm tròn lên ceil)
    $query = "SELECT COUNT($columName) AS 'page' FROM $table WHERE status=$status";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $count = $stmt->fetch();
//    $count trả về 1 mảng
    $result = $count['page'] / $item;
//    làm tròn lên kết quả
    return ceil($result);
}


