<?php

function showClientProductDetail()
{
        $id = $_GET['id'];
        $images = getImg($id);
        $product = getOneDataProducts($id);
        render("product-detail", ["product" => $product,"images"=>$images], 0);
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
        "image"=>$name1,
        "iddm" => $iddm
    ];
   
    addProduct($data);
//    thêm ảnh sản phẩm vào bảng ảnh sản phẩm
    
    $dataImg = [
        [
            "idpro" => $id,
            "src" => $name1
        ],
        [
            "idpro" => $id,
            "src" => $name2
        ],
        [
            "idpro" => $id,
            "src" => $name3
        ]
    ];
    foreach ($dataImg as $value) {
        addImg($value);
    }
    move_uploaded_file($img1['tmp_name'],"public/img/".$img1["name"]);
    move_uploaded_file($img2['tmp_name'],"public/img/".$img2["name"]);
    move_uploaded_file($img3['tmp_name'],"public/img/".$img3["name"]);
    header("location:index.php?ctr=product-list");
}

?>