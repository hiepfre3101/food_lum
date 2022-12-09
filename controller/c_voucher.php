<?php
function showVoucher()
{

    $vouchers = getAllVoucher();
    render("voucher", ['vouchers' => $vouchers], 0);
}

function showVoucherUser()
{
    if (isset($_SESSION["idUser"])) {
        $idUser = $_SESSION["idUser"];
        $vouchers = getAllVoucherUser($idUser);
        render("voucher-user", ['vouchers' => $vouchers], 0);
    } else {
        render("login", [], 0);
    }
}

function saveVoucherUser()
{
    $idVoucher = $_GET["idVoucher"];
    $idUser = $_SESSION["idUser"];
    $voucherDetail = getAllVoucherUser($idUser);
    foreach ($voucherDetail as $value) {
        if ($idVoucher == $value["idvc"]) {
            header("location:?ctr=voucher");
            die;
        }
    }
    $status = 0;
    $data = [
        $idUser,
        (int)$idVoucher,
        $status
    ];
    saveVoucherDetail($data);
    changeQuantityVoucher($idVoucher);
    header("location:index.php?ctr=voucher");
}

function showListVoucher(){
    $arrVoucher = getAllVoucher();
    render('list-voucher',["arrVoucher"=>$arrVoucher],1);
}
function showFormAddVoucher(){
    render('form-add-voucher',[],1);
}

function addVoucher(){
    $discount = $_POST['discount'];
    $content = "Giảm $discount% tổng đơn hàng";
    $data = [
        "quantity"=>$_POST['quantity'],
        "discount"=>$discount,
        "content"=>$content,
        "conditionVoucher"=>$_POST['conditionVoucher'],
        "start_date"=>$_POST['start_date'],
        "exp_date"=>$_POST['exp_date']
    ];
    addDataVoucher($data);
    header("location:index.php?ctr=list-voucher");
}

function deleteVoucher(){
    deleteDataVoucher($_GET['idDelete']);
    header("location:index.php?ctr=list-voucher");
}

function delVoucherUser(){
    deleteDataVoucherUser($_GET["id"]);
    header("location:index.php?ctr=voucher-user");
}