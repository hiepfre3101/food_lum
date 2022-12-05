<?php

function vnpayment(){
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('Asia/Ho_Chi_Minh');

/**
 * Description of vnpay_ajax
 *
 * @author xonv
 */
require_once("./controller/config.php");
$vnp_TxnRef = $_POST['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
$vnp_OrderInfo = $_POST["order_desc"];
$vnp_Amount = $_POST['total'] * 100;
$vnp_Locale = $_POST['language'];
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
$vnp_BankCode = 'NCB';
//Add Params of 2.0.1 Version
$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
    'vnp_BankCode' => $vnp_BankCode
);
ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
$total = $_POST['total'];
if(isset($_SESSION['idUser'])){
      $iduser = $_SESSION['idUser'];
}else{
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
$returnData = array('code' => '00'
    , 'message' => 'success'
    , 'data' => $vnp_Url);
    if (isset($_POST['redirect'])) {
        header("location:".$vnp_Url);
        die();
    } else {
        echo json_encode($returnData);
    }
}

