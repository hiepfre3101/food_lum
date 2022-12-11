<?php
include_once "database.php";
function addProduct($data = [])
{
    global $pdo;
    // các khai báo chuẩn bị sql đọc tại https://www.php.net/manual/en/pdostatement.execute.phps
    $query = "INSERT INTO products (idpro,product_name,product_price,descripton,iddm) VALUE (:idpro,:product_name,:product_price,:descripton,:iddm)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}

function deleteProduct($id)
{
    global $pdo;
    $query = "DELETE FROM products WHERE idpro=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}

function updateProduct($data=[])
{
    global $pdo;
    $query = "UPDATE products SET product_name=:product_name,product_price=:product_price,descripton=:descripton,iddm=:iddm WHERE idpro=:idpro";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}
function getAllDataProducts(){
    global $pdo;
    $query = "SELECT * FROM products";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}
function getOneDataProducts($id){
    global $pdo;
    $query = "SELECT * FROM products WHERE idpro=$id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}

// đếm số bản gi trong bảng product
function countProduct()
{
    global $pdo;
    $query = "SELECT COUNT(idpro) AS 'count' FROM products";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $count = $stmt->fetch();
    return $count[0];
}
// lấy id cuối cùng của bảng product
function getIdProduct()
{
    global $pdo;
    $query = "SELECT idpro FROM products ORDER BY idpro DESC LIMIT 1;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $id = $stmt->fetch();
    return $id[0];
}
// thểm ảnh vào bảng ảnh
function addImg($data = []){
    global $pdo;
    $query = "INSERT INTO img_product (idpro, src, position) VALUE (:idpro, :src, :position)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}

// lấy các ảnh cùng sản phẩm
function getImg($id){
    global $pdo;
    $query = "SELECT src FROM img_product WHERE idpro = $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $arrImg = $stmt->fetchAll();
    return $arrImg;
}

function getAllProductWithCategory($idCate){
    global $pdo;
    $query = "SELECT p.*,cate.categories_name
    FROM products as p
    JOIN categories as cate
    ON p.iddm = cate.iddm
    WHERE p.iddm = $idCate";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
function updateDataCategoryProduct($iddm,$idpro)
{
    global $pdo;
    $query = "UPDATE products SET iddm=$iddm WHERE idpro=$idpro";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
}


// lấy thông tin sản phẩm và ảnh sởn phẩm
function getInfoProduct($id)
{
    global $pdo;
    $query = "SELECT product_name,product_price,descripton,src,iddm
    FROM products 
    INNER JOIN img_product  ip 
    on products.idpro = ip.idpro 
    WHERE products.idpro = $id";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $info = $stmt->fetchAll();
    return $info;
}
// lấy tất cả sản phẩm cùng danh mục
function getAllProductCategory($id){
    global $pdo;
    $idpro = $_GET["id"];
    $query = "SELECT * FROM products WHERE iddm=$id AND idpro != $idpro LIMIT 0,4";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $arrProduct = $stmt->fetchAll();
    return $arrProduct;
}

// cập nhật ảnh sản phẩm

function updateDataImgProduct($data){
    global $pdo;
    $query = "UPDATE img_product SET position=:position ,src=:src WHERE idpro=:idpro";
    $stmt = $pdo->prepare($query);
    $stmt->execute($data);
}
function getDataImg($idpro){
    global $pdo;
    $query = "SELECT * FROM img_product WHERE idpro=$idpro";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $arrProduct = $stmt->fetchAll();
    return $arrProduct;
}
function getSellerOption($filter){
    global $pdo;
    $query = "SELECT SUM(quantity) as 'selled',p.product_name,p.product_price,p.idpro
    FROM `order_detail` as oddt
    join products as p
    on p.idpro = oddt.idpro
    JOIN categories as cate 
    on cate.iddm = p.iddm
    group by p.idpro
    ORDER BY  SUM(quantity) $filter
    LIMIT 0,3";
     $stmt = $pdo->prepare($query);
     $stmt->execute();
     $arrProduct = $stmt->fetchAll();
     return $arrProduct;
}

function getProductUserOrdered($iduser, $idpro){
    global $pdo;
   $query = "SELECT oddt.idorder
   FROM order_detail as oddt 
   JOIN order_user as od
   on od.idorder = oddt.idorder
   JOIN user as us
   on us.iduser = od.id_user
   JOIN products as p
   on oddt.idpro = p.idpro
   WHERE od.id_user = $iduser and oddt.idpro = $idpro";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function getBadProduct(){
    global $pdo;
    $sql = "";
}