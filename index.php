<?php
// required model here ...
require_once("./model/config.php");
require_once("./model/database.php");
require_once("./model/m_category.php");
require_once("./model/m_product.php");
require_once("./model/m_user.php");
require_once("./model/m_cart.php");
require_once("./model/m_pagination.php");
require_once("./model/m_voucher.php");
require_once("./model/m_order.php");
require_once("./model/m_comment.php");
require_once("./model/m_thongke.php");
require_once("./model/m_slider.php");

// require controller here...
require_once("./controller/c_render.php");
require_once("./controller/c_client.php");
require_once("./controller/c_product.php");
require_once("./controller/c_cart.php");
require_once("./controller/c_user.php");
require_once("./controller/c_voucher.php");
require_once("./controller/c_order.php");
require_once("./controller/c_comment.php");
require_once("./controller/vnpay_create_payment.php");
require_once("./controller/c_categories.php");
require_once("./controller/c_slider.php");
require_once("./controller/c_admin.php");
//@param : $ctr viết tắt controller, đây là biến để truyền lên thanh url có thể đặt tên tùy thích
// nhưng để ctr nhằm thể hiện là đang gọi ctr nào.
$ctr = isset($_GET["ctr"]) ? $_GET['ctr'] : '/';
switch ($ctr) {
    case "/";
    case "home":
        getInfoHeader();
        showClientHome();
        break;
    case "product-detail":
        getInfoHeader();
        showClientProductDetail();
        break;
    case "add-cart":
        getInfoHeader();
        addProductCart();
        break;
    case "delete-item-cart":
        deleteItemCart();
        break;
    case "cart":
        getInfoHeader();
        displayCart();
        break;
    case "cart-detail":
        getInfoHeader();
        showCheckOut();
        break;
    case "login":
        getInfoHeader();
        showLogin();
        break;
    case "check-login":
        getInfoHeader();
        signIn($_POST['username'], $_POST['password']);
        break;
//        lấy lại mật khẩu
    case "re-pass":
        getInfoHeader();
        showRepasssword();
        break;
    case "check-email":
        getInfoHeader();
        showFormCheckEmail();
        break;
    case "enter-otp":
        getInfoHeader();
        showFormOtp();
        break;
    case "check-otp":
        getInfoHeader();
        checkCookie();
        break;
    case "change-pass":
        changePass();
        break;
//        kết thúc lấy lại mật khẩu
    case "logout":
        getInfoHeader();
        logOunt();
        break;
    case "sign-up":
        getInfoHeader();
        showSignup();
        break;
    case "save-user":
        getInfoHeader();
        signUp();
        break;
    case "voucher":
        getInfoHeader();
        showVoucher();
        break;
    case "save-user-voucher":
        getInfoHeader();
        saveVoucherUser();
        break;
    case "voucher-user":
        getInfoHeader();
        showVoucherUser();
        break;
    case "add-order";
        getInfoHeader();
        addOrderNew();
        break;
    case "order-user":
        getInfoHeader();
        checkViewOrder();
        break;
    case "order-ship":
        getInfoHeader();
        showClientOrderShip();
         break;    
    case "order-done":
        getInfoHeader();
        showClientOrderDone();
         break;    
     case "vnp_payment":
        vnpayment();
        break;
     case "del-voucher-user":
        delVoucherUser();
        break;   
    //admin
    case "order-detail-user":
        getInfoHeader();
        showClientOrderDetail();
        break;
    case "user-profile":
        getInfoHeader();
        showUserProfile();
        break;
    case "save-update-user":
        saveUpdateUser();
        break;
    case "menu":
        getInfoHeader();
        showMenuClient();
        break;
    //admin
    case "add-product":
        showAddProduct();
        break;
    case "product-list":
        showListProduct();
        break;
    case "user-list":
        showListUser();
        break;
    case "list-order":
        showOrder();
        break;
    case "list-order-transport":
        showOrder2();
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


    case "form-update":
        showFormUpdateProduct();
        break;
    case "update-product":
        updateProductAdmin();
        break;
    case "delete-all-product":
        deleteAllProduct();
        break;

    case "comment-list":
        showListComment();
        break;

    case "detail-comment":
        showDetailComment();
        break;
    case "delete-comment":
        deleteAllComment($idpro);
        break;
    case "list-category":
        showListCategory();
        break;
    case "add-category":
        showFormAddCategory();
        break;
    case "add-category-new":
        addCategory();
        break;
    case "update-category":
        showFormUpdate();
        break;
    case "update-data-category":
        updateCategory();
        break;
    case "detail-category":
        showDetailCategory();
        break;
    case "update-category-product":
        if (isset($_POST['btn-save'])) {
            updateAllCategoryProduct();
        } else {
            updateOneCategoryProduct();
        }
        break;
    case "delete-category":
        deleteCategory($_GET['id']);
        break;
    case "detail-user":
        showDetailUser();
        break;
    case "add-new-user":
        showFormAddUser();
        break;
    case "admin-add-user":
        signUp();
        break;
    case "update-user":
        formUpdateUser();
        break;
    case "admin-update-user":
        adminUpdateUser();
        break;
    case "admin-delete-user":
        adminDeleteUser();
        break;
    case"list-slider":
        showSlide();
        break;
    case "slider-form":
        updateSlider();
        break;
    case "delete-slider":
        deleteSlider();
        break;
    case "add-slider":
        showFormAddSlider();
        if (isset($_POST['add-slider'])) {
            addSlider();
        }
        break;

    case "adminhome" :
    showAdminHome();
    break;
    case "list-voucher":
        showListVoucher();
        break;

    case "add-voucher":
        showFormAddVoucher();
        break;
    case "delete-voucher":
        deleteVoucher();
        break;
    case "admin-add-voucher":
        addVoucher();
        break;
}