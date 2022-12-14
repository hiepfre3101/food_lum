<?php
// hiển thị danh sách đơn hànhg
function showOrder()
{
    $pageCount = pageCount2('order_user', 'idorder', '5', 'status', '1');
    $arrOrder = pagination2('order_user', '5', 'status', '1');
    render("order", ["arrOrder" => $arrOrder, "countPage" => $pageCount], 1);
}
function showOrder2()
{
    $pageCount = pageCount2('order_user', 'idorder', '5', 'status', '2');
    $arrOrder = pagination2('order_user', '5', 'status', '2');
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
    if ($status == 2) {
        showOrder();
    } else if ($status = 3) {
        header("location:index.php?ctr=list-order-transport");
    }
}

function addOrderNew()
{
    //    1.
    //    thực hiện thêm dữ liệu vào bảng order său đó lấy mảng sản phẩm trong giỏ hàng thêm vào bảng order_detail
    $total = $_POST['total'];
    if (isset($_SESSION['idUser'])) {
        $iduser = $_SESSION['idUser'];
    } else {
        $iduser = $_POST['idUser'];
    }
    $idVouCher = $_POST['voucherId'];
    $date = date('Y-m-d');
    //    kiểm tra xem có đơn hàng nào không nếu khôgn có thì gán giá trị bàng 1 cho id còn nếu khôgn có lấy giá trị id đơn hàng mới nhất +1
    if (empty(countOrder())) {
        $idOrder = 1;
    } else {
        $idOrder = getIdOrder() + 1;
    }
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
function checkViewOrder(){
    if (isset($_GET['vnp_SecureHash'])) {
        showOrderHaveRespond();
    }else{
        showClientOrder();
    }
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
function showOrderHaveRespond(){
    require_once("./controller/config.php");
    if (isset($_GET['vnp_SecureHash']) && isset($_SESSION["idUser"])) {
        //Kiểm tra trạng thái giao dịch
        if ($_GET['vnp_ResponseCode'] == '00') {
            $allOrder = getAllDataOrder();
            extract($_SESSION["dataOfOrder"]);
            foreach($allOrder as $value){
                if($value["idorder"]==$idOrder){
                    header("location:?ctr=order-user");
                    die;
                }
            }
            addDataOrder($dataOrder);
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
            if(isset($idVouCher)){
                 changeStatusVoucher($idVouCher, $dataOrder["id_user"]); 
            }
        }

        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }
        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        $idUser = $_SESSION["idUser"];
        $orders = getUserOrder($idUser);
        render('order-user', ["orders" => $orders, "vnp_SecureHash" => $vnp_SecureHash, "secureHash" => $secureHash], 0);
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
function showClientOrderShip()
{
    $idUser = $_SESSION["idUser"];
    $orders = getDataOrderOption($idUser, 2);
    render('order-shipping', ["orders" => $orders], 0);
}
function showClientOrderDone()
{
    $idUser = $_SESSION["idUser"];
    $orders = getDataOrderOption($idUser, 3);
    render('order-done', ["orders" => $orders], 0);
}
