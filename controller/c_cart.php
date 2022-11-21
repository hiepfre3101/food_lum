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

function showCheckOut(){
//    tạo biến lưu tổng tiền
    $totalPrice = 0;
//    chuyển đổi mảng giỏ hàng mới nhất
    setArrCart($_POST);
//    lấy dữ liệu mới nhất của cart
    $arrCart = getCart();
//    lấy tông tin của user sử lý său do chưa có phần đăng nhập
    $arrInfoUsser = [];
    render("cart-detail", ["arrCart"=>$arrCart,"arrInfoUser"=>$arrInfoUsser], 0);
}


