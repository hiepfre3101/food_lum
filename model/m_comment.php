<?php
include_once "database.php";
    
    function insert_binhluan($content,$iduser,$idpro,$time_send){
        global $pdo;
        $sql = "INSERT INTO comment(content,iduser,idpro,time_send) VALUES('$content','$iduser','$idpro','$time_send')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    function insert_vote($idpro,$iduser,$star){
        global $pdo;
        $sql = "INSERT INTO vote(idpro,iduser,star) VALUES('$idpro','$iduser','$star')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    function loadonevote($idpro){
    global $pdo;
    $query = "SELECT v.star,p.idpro,us.iduser,AVG(v.star) as 'avgstar'
    from vote as v 
    join user as us on v.iduser = us.iduser
    join products as p on v.idpro = p.idpro
    where v.idpro = $idpro";
    $stm = $pdo->prepare($query);
    $stm->execute();
    $result = $stm->fetch();
    return $result;
    }
//     function loadallvote($idpro)
// {
//     global $pdo;
//     $query = "SELECT v.star, us.iduser ,us.user_name, us.avatar,v.id
//     from vote as v 
//     join user as us on v.iduser = us.iduser
//     join products as p on v.idpro = p.idpro
//     where v.idpro = $idpro";
//     $stm = $pdo->prepare($query);
//     $stm->execute();
//     $result = $stm->fetchAll();
//     return $result;
// }

    function getAllComment(){
    global $pdo;
    $query = "SELECT cmt.content, cmt.time_send, cmt.iduser FROM comment as cmt 
    JOIN user as u ON cmt.iduser = u.iduser";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $comment = $stmt->fetchAll();
    return $comment;
    }

    function getCommentWithProduct()
{
    global $pdo;
    $sql = "SELECT MIN(cmt.time_send) as 'mindate',
    MAX(cmt.time_send) as 'maxdate',
    p.product_name, count(cmt.idcm) as'countcmt',
    p.idpro
    from comment as cmt
    join products as p
    on p.idpro = cmt.idpro
    GROUP BY p.idpro;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

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

?>