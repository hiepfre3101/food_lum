<?php
include_once "database.php";

function getCommentByProductId($idpro)
{
    global $pdo;
    $query = "SELECT cmt.content, cmt.time_send, us.iduser ,us.user_name, us.avatar,cmt.idcm
    from comment as cmt 
    join user as us on cmt.iduser = us.iduser
    join products as p on cmt.idpro = p.idpro
    where cmt.idpro = $idpro";
    $stm = $pdo->prepare($query);
    $stm->execute();
    $result = $stm->fetchAll();
    return $result;
}
function getOneProduct()
{
  global $pdo;
  $idpro = $_GET["idpro"];
  $query2 = "select * from products where idpro=$idpro";
  $stm = $pdo->prepare($query2);
  $stm->execute();
  $result = $stm->fetch();
  return $result;
  
}

function getCommentWithProduct()
{
    global $pdo;
    $sql = "SELECT MIN(cmt.time_send) as 'min_time',
    MAX(cmt.time_send) as 'max_time',
    p.product_name, count(cmt.idcm) as'countCmt',
    p.idpro
    from comment as cmt
    join products as p
    on p.idpro = cmt.idpro
    GROUP BY p.idpro;";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $arrComment = $stm->fetchAll();
    return $arrComment;
}