<?php

use function PHPSTORM_META\type;

function displayCart()
{
    $arrCarrt = getCart();
    if ($arrCarrt && isset($_SESSION["idUser"])) {
        $vouchers = getAllVoucherUserUseful($_SESSION['idUser']);
    } else if (isset($_SESSION["idUser"])) {
        $arrCarrt = "";
        $vouchers = getAllVoucherUserUseful($_SESSION['idUser']);
    } else {
        header("location:?ctr=login");
        die;
    }
    render("cart", ["arrCart" => $arrCarrt, "vouchers" => $vouchers], 0);
}

function addProductCart()
{
    // nếu tồn tại số lượng tức là người dùng đang thực hiện thêm sản phẩm còn nếu không chỉ hiển thị sản phẩm trong giỏ hàng
    if (isset($_SESSION["idUser"])) {
        if (isset($_POST['quantity'])) {
            $id = $_GET['id'];
            $quantity = $_POST['quantity'];
            if (isset($_SESSION["arrCart"])) {
                $arrCart = $_SESSION["arrCart"];
                foreach ($arrCart as $key => $value) {
                    if ($id == $key) {
                        $quantity += $value;
                        break;
                    }
                }
            }
            addCart($id, $quantity);
        }
        header("location:?ctr=home");
        die;
    }
    render("login", [], 0);
}

function showCheckOut()
{
    //    chuyển đổi mảng giỏ hàng mới nhất
    extract($_POST);
    $data = [];
    $post = $_POST;
    //xóa 2 phần tử k sử dụng đến là voucher và total
    unset($post["voucherId"]);
    unset($post["total"]);
    $data = $post;
    setArrCart($data);
    //    lấy dữ liệu mới nhất của cart
    $arrCart = getCart();
    $arrInfoUsser = getOneDataUser($_SESSION['idUser']);
    render("cart-detail", ["arrCart" => $arrCart, "arrInfoUser" => $arrInfoUsser], 0);
}
function deleteItemCart(){
    deleteCartItem($_GET['idItem']);
    header("location:index.php?ctr=cart");
}
