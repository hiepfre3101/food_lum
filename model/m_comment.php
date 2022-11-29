<?php
include_once "database.php";
    
    function addComment($data = []){
        global $pdo;
        $query = 'INSERT INTO comment (content,iduser,idpro,time_send) VALUE (:content,:iduser,:idpro,:time_send);';
        $stmt = $pdo->prepare($query);
        $stmt->execute($data);
    }

    // function insert_binhluan($content,$iduser,$idpro,$time_send){
    //     global $pdo;
    //     $sql = "INSERT INTO comment(content,iduser,idpro,time_send) VALUES('$content','$iduser','$idpro','$time_send')";
    //     $stmt = $pdo->prepare($sql);
    //     $stmt->execute();
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