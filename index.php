<?php
// required model here ...
require_once("./model/config.php");
require_once("./model/database.php");
require_once("./model/m_category.php");
require_once("./model/m_category.php");
require_once("./model/m_product.php");
require_once("./model/m_user.php");
require_once("./model/m_cart.php");

// require controller here...
require_once("./controller/c_render.php");
require_once("./controller/c_client.php");
require_once("./controller/c_product.php");
require_once("./controller/c_cart.php");

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
        showClientCartDetail();
        break;
    case "login":
        showLogin();
        break;
    case "sign-up":
        showSignup();
        break;
        // admin

}
