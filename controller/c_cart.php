<?php
function displayCart()
{
    // nếu tồn tại số lượng tức là người dùng đang thực hiện thêm sản phẩm còn nếu không chỉ hiển thị sản phẩm trong giỏ hàng
    if (isset($_SESSION["idUser"])) {
        if (isset($_POST['quantity'])) {
            $id = $_GET['id'];
            $quantity = $_POST['quantity'];
            addCart($id, $quantity);
        }
        $arrCarrt = getCart();
        $vouchers = getAllVoucherUser($_SESSION['idUser']);
        render("cart", ["arrCart" => $arrCarrt, 'vouchers' => $vouchers], 0);
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



