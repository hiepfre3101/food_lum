<?php
function loadall_thongke(){
    global $pdo;
    $sql = "SELECT categories.iddm as madm, categories.categories_name as tendm, count(categories.iddm) as countdm, count(products.idpro) as countsp,min(products.product_price) as minprice,max(products.product_price) as maxprice, avg(products.product_price) as avgprice";
    $sql.=" FROM products left join categories on categories.iddm=products.iddm";
    $sql.=" GROUP BY categories.iddm ORDER BY categories.iddm DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $listthongke = $stmt->fetchAll();
    return $listthongke;
}
function loaddm(){
    global $pdo;
    $sql="SELECT * FROM categories";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $countdm = $stmt->fetchAll();
    return $countdm;
}

?>