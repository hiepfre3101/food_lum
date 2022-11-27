<?php
// required model here ...
require_once("./model/config.php");
require_once("./model/database.php");
require_once("./model/m_category.php");
require_once("./model/m_category.php");
require_once("./model/m_product.php");
require_once("./model/m_user.php");
require_once("./model/m_cart.php");
require_once("./model/m_pagination.php");
require_once("./model/m_voucher.php");
require_once("./model/m_order.php");

// require controller here...
require_once("./controller/c_render.php");
require_once("./controller/c_client.php");
require_once("./controller/c_product.php");
require_once("./controller/c_cart.php");
require_once("./controller/c_user.php");
require_once("./controller/c_voucher.php");
require_once("./controller/c_order.php");

//@param : $ctr viết tắt controller, đây là biến để truyền lên thanh url có thể đặt tên tùy thích
// nhưng để ctr nhằm thể hiện là đang gọi ctr nào.
$ctr = isset($_GET["ctr"]) ? $_GET['ctr'] : '/';
switch ($ctr) {
    case "/";
    case "home":
        showClientHome();
        break;
    case "product-detail":
        showClientProductDetail();
        break;
    case "add-cart":
        displayCart();
        break;
    case "cart":
        displayCart();
        break;
    case "cart-detail":
        showCheckOut();
        break;
    case "login":
        showLogin();
        break;
    case "check-login":
        signIn($_POST['username'], $_POST['password']);
        break;
    case "logout":
        logOunt();
        break;
    case "sign-up":
        showSignup();
        break;
    case "save-user":
        signUp();
        break;
    case "voucher":
        showVoucher();
        break;
    case "save-user-voucher":
        saveVoucherUser();
        break;
    case "voucher-user":
        showVoucherUser();
        break;
    case "add-order";
        addOrderNew();
        break;
    case "order-user":
        showClientOrder();
        break;
    //admin
    case "add-product":
        showAddProduct();
        break;
    case "product-list":
        showListProduct();
        break;
    case"user-list":
        showListUser();
        break;
    case "list-order":
        showOrder();
        break;
    case "detail-order":
        showOrderDetail(1);
        break;
    case "status-Order":
        updateSattusOrder();
        break;
    case "Add-product":
        addNewProduct();
        break;

}
