<?php

function showClientProductDetail()
{
    $id = $_GET['id'];
    $images = getImg($id);
    $product = getOneDataProducts($id);
    $idCate = $product["iddm"];
    $productSame = getAllProductCategory($idCate);
    render("product-detail", ["product" => $product, "images" => $images, "productSame" => $productSame], 0);
}

function showAddProduct()
{
    $categories = getAllDataCategory();
    render("form-add-product", ["categories" => $categories], 1);
}

//hiển thị sản phẩm phân trang
function showListProduct()
{
    $page = pageCount('products', 'idpro', '5');
    $arrProduct = pagination('products', '5');
    render("product", ["arrProducts" => $arrProduct, "countPage" => $page], 1);
}

function addNewProduct()
{
//    thiết lập id soản phẩm và tạo bản gi sản phẩm
    if (countProduct() == 0) {
        $id = 1;
    } else {
        $id = getIdProduct() + 1;
    }
    $name = $_POST['name-product-add'];
    $price = $_POST['price-product-add'];
    $desc = $_POST['description'];
    $iddm = $_POST['category'];

    $foder = "./public/img/";
    $img1 = $_FILES['img-product-add-1'];
    $name1 = $foder . $img1['name'];
    $img2 = $_FILES['img-product-add-2'];
    $name2 = $foder . $img2['name'];
    $img3 = $_FILES['img-product-add-3'];
    $name3 = $foder . $img3['name'];
    // lay anh dau tien lam img mac dinh
    $data = [
        "idpro" => $id,
        "product_name" => $name,
        "product_price" => $price,
        "descripton" => $desc,
        "iddm" => $iddm
    ];

    addProduct($data);
//    thêm ảnh sản phẩm vào bảng ảnh sản phẩm

    $dataImg = [
        [
            "idpro" => $id,
            "src" => $name1,
            "position" => 1
        ],
        [
            "idpro" => $id,
            "src" => $name2,
            "position" => 2
        ],
        [
            "idpro" => $id,
            "src" => $name3,
            "position" => 3
        ]
    ];
    foreach ($dataImg as $value) {
        addImg($value);
    }
    move_uploaded_file($img1['tmp_name'], "public/img/" . $img1["name"]);
    move_uploaded_file($img2['tmp_name'], "public/img/" . $img2["name"]);
    move_uploaded_file($img3['tmp_name'], "public/img/" . $img3["name"]);
    header("location:index.php?ctr=product-list");
}

function showFormUpdateProduct()
{
    $arrInfo = getInfoProduct($_GET['id']);
    $categories = getAllDataCategory();
    render("form-update-product", ["arrInfo" => $arrInfo, "categories" => $categories], 1);
}

function updateProductAdmin()
{
//    cập nhật sản phẩm
    $idpro = $_GET['id'];
    $productImg = getDataImg($idpro);
    $name = $_POST['name-product-add'];
    $price = $_POST['price-product-add'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $data = [
        "product_name" => $name,
        "product_price" => $price,
        "descripton" => $description,
        "iddm" => $category,
        "idpro" => $idpro
    ]; 
    updateProduct($data);
    for($i=0;$i<3;$i++){
        $indexForm = $i+1;
      $imgSize = $_FILES["img-product-add-$indexForm"]["size"];
      if($imgSize > 0){
        $image = "./public/img/" .$_FILES["img-product-add-$indexForm"]['name'];
      } else{
         $image = $productImg[$i]["src"];
      }
      $imgData = [
         "position"=>$indexForm,
         "src"=>$image,
         "idpro"=>$idpro
      ];
      var_dump($imgData);
      move_uploaded_file($_FILES["img-product-add-$indexForm"]['tmp_name'], $image);
      updateDataImgProduct($imgData);
    }
    header("location:index.php?ctr=product-list");
}

function deleteAllProduct()
{
    if (isset($_GET['idDelete'])) {
        deleteProduct($_GET['idDelete']);
    }else{
        $arrProduct = getAllDataProducts();
        foreach ($_POST as $key => $value) {
            if ($value == "on") {
                foreach ($arrProduct as $valuePro) {
                    if ($valuePro['idpro'] = $key) {
                        deleteProduct($valuePro['idpro']);
                    }
                }
            }
        }
    }

    header("location:index.php?ctr=product-list");
}

?>