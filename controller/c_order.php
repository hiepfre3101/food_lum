<?php
// hiển thị danh sách đơn hànhg
function showOrder()
{
    $pageCount = pageCount2('order_user', 'idorder', '5', '1');
    $arrOrder = pagination2('order_user', '5', '1');
    render("order", ["arrOrder" => $arrOrder, "countPage" => $pageCount], 1);
}
// hiển thị chi tiết đơn hàng của admin
function showOrderDetail($role)
{
    $idUser = getOneDataUser($_GET['idUser']);
    $total = getOneDataOrder($_GET['idOrder']);
    $arrProduct = productDetailOrder($_GET['idOrder']);
    render("detail-order", ["idUser" => $idUser, "arrProduct" => $arrProduct, "total" => $total], $role);
}
function updateSattusOrder()
{
    $status = $_POST['status'];
    $idOrder = $_GET['idOrder'];
    changeStatusOrder($idOrder, $status);
    showOrder();
}

function addOrderNew()
{
    //    1.
    //    thực hiện thêm dữ liệu vào bảng order său đó lấy mảng sản phẩm trong giỏ hàng thêm vào bảng order_detail
    $total = $_POST['total'];
    $iduser = $_SESSION['idUser'];
    $idVouCher = $_POST['voucherId'];
    $date = date('Y-m-d');
    //    kiểm tra xem có đơn hàng nào không nếu khôgn có thì gán giá trị bàng 1 cho id còn nếu khôgn có lấy giá trị id đơn hàng mới nhất +1
    if (empty(countOrder())) {
        $idOrder = 1;
    } else {
        $idOrder = getIdOrder() + 1;
    }
    var_dump(empty(countOrder()));
    $data = [
        "idorder" => $idOrder,
        "id_user" => $iduser,
        "date_time" => $date,
        "total" => $total,

    ];
    addDataOrder($data);
    //// lấy mảng giỏ hàng
    $arrCart = getCart();
    //    key của mảng này là id của sản phẩm trong giỏ hàng còn value của nó chính là số lượng sản phẩm có trong giỏ hàng
    foreach ($arrCart as $key => $value) {
        $DetailOrder = [
            "idpro" => $key,
            "idorder" => $idOrder,
            "quantity" => $value
        ];
        addDataOrderDetail($DetailOrder);
    }
    setArrCart([]);
    if ($idVouCher) {
        changeStatusVoucher($idVouCher, $iduser);
    }
    header("location:index.php?ctr=order-user");
}

function showClientOrder()
{
    if (isset($_SESSION["idUser"])) {
        $idUser = $_SESSION["idUser"];
        $orders = getUserOrder($idUser);
        render('order-user', ["orders" => $orders], 0);
        die;
    }
    render('login', [], 0);
}

function showClientOrderDetail()
{
    $idOrder = $_GET["order"];
    $order = getOneDataOrder($idOrder);
    $orderDetails = productDetailOrder($idOrder);
    render('order-detail', ["orderDetails" => $orderDetails, "order" => $order], 0);
}
