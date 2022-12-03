<?php
include_once "database.php";
    
    function insert_binhluan($content,$iduser,$idpro,$time_send,$rating){
        global $pdo;
        $sql = "INSERT INTO comment(content,iduser,idpro,time_send,rating) VALUES('$content','$iduser','$idpro','$time_send','$rating')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    function insert_vote($idpro,$iduser,$star){
        global $pdo;
        $sql = "INSERT INTO vote(idpro,iduser,star) VALUES('$idpro','$iduser','$star')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    function loadstar($idpro){
    global $pdo;
    $query = "SELECT p.idpro,us.iduser,AVG(cmt.rating) as 'avgstar'
    from comment as cmt 
    join user as us on cmt.iduser = us.iduser
    join products as p on cmt.idpro = p.idpro
    where cmt.idpro = $idpro";
    $stm = $pdo->prepare($query);
    $stm->execute();
    $result = $stm->fetch();
    return $result;
    }
    
    function getAllComment(){
    global $pdo;
    $query = "SELECT cmt.content, cmt.time_send, cmt.iduser FROM comment as cmt 
    JOIN user as u ON cmt.iduser = u.iduser";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $comment = $stmt->fetchAll();
    return $comment;
    }

   
function getCommentByProductId($idpro)
{
    global $pdo;
    $query = "SELECT cmt.content, cmt.time_send,cmt.rating, us.iduser ,us.full_name, us.avatar,cmt.idcm
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
// delete comment
function deleteComment($id)
{
    global $pdo;
    $query = "DELETE FROM comment WHERE idcm=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}
function getAllDataComment(){
    global $pdo;
    $query = "SELECT * FROM comment";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}