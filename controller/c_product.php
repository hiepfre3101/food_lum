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
        "image" => $name1,
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
//    cập nhật ảnh sản phẩm
    $img1 = $_FILES['img-product-add-1'];
    $img1Name = "./public/img/" . $img1['name'];
    $img2 = $_FILES['img-product-add-2'];
    $img2Name = "./public/img/" . $img2['name'];
    $img3 = $_FILES['img-product-add-3'];
    $img3Name = "./public/img/" . $img3['name'];
    if ($img1['size'] > 0) {
        $imgData = [
            "src" => $img1Name,
            "position" => 1,
            "idpro" => $idpro
        ];
        move_uploaded_file($img1['tmp_name'], $img1Name);
        updateDataImgProduct($imgData);
    }
    if ($img2['size'] > 0) {
        $imgData = [
            "src" => $img2Name,
            "position" => 2,
            "idpro" => $idpro
        ];
        move_uploaded_file($img2['tmp_name'], $img2Name);
        updateDataImgProduct($imgData);
    }
    if ($img3['size'] > 0) {
        $imgData = [
            "src" => $img3Name,
            "position" => 3,
            "idpro" => $idpro
        ];
        move_uploaded_file($img3['tmp_name'], $img3Name);
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