<?php include_once("./view/header.php") ?>
<?php include_once("./view/order-tab.php") ?>
                <div class="row mt-4">
                    <?php foreach ($orders as $value) : ?>
                        <div class="col-lg-6 col-12 voucher shadow-lg d-flex justify-content-between mb-5 p-4">
                            <img src="./public/img/delivery.gif" alt="" class="w-25">
                            <div class="d-flex align-items-center justify-content-center flex-fill flex-column">
                                <p class="fw-bold">Đơn hàng ngày :<span class="text-red"> <?= $value["date_time"] ?></span></p>
                                <p class="fw-bold">Tổng tiền: <span class="text-red"><?= $value["total"] ?>đ</span></p>
                                <p class="fw-bold">Trạng thái: 
                                    <span class="text-red">
                                    <?php
                                       if($value["status"]== 1) echo "Chờ xác nhận";
                                       if($value["status"]== 2) echo "Giao hàng";
                                       if($value["status"]== 3) echo "Đã nhận hàng";
                                    ?>
                                   </span></p>
                                <div class="dropdown">
                                    <a href="?ctr=order-detail-user&order=<?= $value["idorder"] ?>" class="d-block px-3 py-2 text-white btn-save w-100 h-100" type="button">
                                        Chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
<div class="modal-wrap">
  <div class="container modal-item">
      <div class="close-modal">x</div>
            <div class="header clearfix">
                <h3 class="text-muted fs-1">Thông báo</h3>
            </div>
            <div class="table-responsive">  
                <div class="form-group">
                    <label>
                        <?php
                        if ($secureHash == $vnp_SecureHash) {
                            if ($_GET['vnp_ResponseCode'] == '00') {
                                echo "<span style='color:green' class='fs-2 fw-semibold'>GD Thành công</span>";
                            } else {
                                echo "<span style='color:red' class='fs-2 fw-semibold'>GD Không thành công</span>";
                            }
                        } else {
                            echo "<span style='color:red'>Chu ky khong hop le</span>";
                        }
                        ?>
                    </label>
                </div> 
                <div class="form-group">
                    <label >Mã đơn hàng:</label>
                    <label><?php echo $_GET['vnp_TxnRef'] ?></label>
                </div>    
                <div class="form-group">

                    <label >Số tiền:</label>
                    <label><?php echo $_GET['vnp_Amount']/100?>VND</label>
                </div>  
                <div class="form-group">
                    <label >Nội dung thanh toán:</label>
                    <label><?php echo $_GET['vnp_OrderInfo'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã GD Tại VNPAY:</label>
                    <label><?php echo $_GET['vnp_TransactionNo'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã Ngân hàng:</label>
                    <label><?php echo $_GET['vnp_BankCode'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Thời gian thanh toán:</label>
                    <label><?php echo $_GET['vnp_PayDate'] ?></label>
                </div> 
              
            </div>
            <p>
                &nbsp;
            </p>
            <div>
                   <p>&copy; VNPAY <?php echo date('Y')?></p>
            </div>
        </div>  
  </div>
<script src="./public/js/openModal.js"></script>
<?php include_once("./view/footer.php") ?>