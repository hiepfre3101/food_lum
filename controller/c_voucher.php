<?php 
   function showVoucher(){
      $vouchers = getAllVoucher();
    render("voucher",['vouchers'=>$vouchers],0);
   }
   function showVoucherUser(){
    if(isset($_SESSION["idUser"]))
    {
      $idUser = $_SESSION["idUser"];
       $vouchers = getAllVoucherUser($idUser);
    render("voucher-user",['vouchers'=>$vouchers],0);
    }else{
        render("login",[],0);
    }
   }
   function saveVoucherUser(){
      $idVoucher = $_GET["idVoucher"];
      $idUser =  $_SESSION["idUser"];
      $status = 0;
      $data =[
        $idUser,
      (int)$idVoucher,
        $status
      ];
      saveVoucherDetail($data);
      changeQuantityVoucher($idVoucher);
      header("location:index.php?ctr=voucher");
   }
?>