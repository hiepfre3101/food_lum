<?php
function displayCart()
{
    // nếu tồn tại số lượng tức là người dùng đang thực hiện thêm sản phẩm còn nếu không chỉ hiển thị sản phẩm trong giỏ hàng
    if (isset($_POST['quantity'])) {
        $id = $_GET['id'];
        $quantity = $_POST['quantity'];
        addCart($id, $quantity);
    }
    $arrCarrt = getCart();
    render("cart", ["arrCart" => $arrCarrt], 0);
}

