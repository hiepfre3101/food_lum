<?php include_once("./view/header.php") ?>
<link rel="stylesheet" href="./public/css/voucher.css">
    <div class=" row app w-100 px-5 py-4">
        <div class="col-lg-3 col-10 acc-wrapper">
            <div class="profile-block w-100 d-flex align-items-center justify-content-start">
                <div class="d-flex justify-content-start">
                    <?php if (isset($_SESSION['idUser'])) {
                        echo "<img class='rounded-circle  me-5 img-block img-block-small' src =" . getOneDataUser($_SESSION['idUser'])['avatar'] . "></img>";
                        echo "<div><p class='fs-4 fw-semibold'>" . getOneDataUser($_SESSION['idUser'])['user_name'] . "</p>";
                        echo "<a href='#' class='text-decoration-none text-gray d-flex justify-content-start align-items-center fs-5 text-gray'><i class='fa-solid fa-pencil'></i> Sửa hồ sơ</a></div>";
                    } else {
                        echo "<a href='?ctr=login'>Đăng nhập</a>";
                    }
                    ?>
                </div>
            </div>
            <nav class="d-flex flex-column justify-content-center mt-5">
                <a href="?ctr=user-profile" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-regular fa-user me-2 "></i><span class="text-dark link-orange">Tài khoản của tôi</span></a>
                <a href="?ctr=order-user" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-regular fa-user me-2 "></i><span class="text-dark link-orange">Đơn hàng của tôi</span></a>
                <a href="?ctr=voucher-user" class="d-flex justify-content-start align-items-center fs-4 text-decoration-none"><i class="fa-solid fa-ticket-simple me-2 "></i><span class="text-dark link-orange">Kho Voucher</span></a>
            </nav>
        </div>
        <div class="list-wrapper col-lg-9 col-12 p-5 ">
            <p class="text-dark fw-semibold fs-1 title-orange position-relative ms-4">Đơn hàng</p>
            <div class="mt-5">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active-tab fs-3 text-dark" aria-current="page" href="#">Tất cả</a>
                    </li>
                    <li><a class="nav-link fs-3 text-dark" href="#">Đang giao</a></li>
                    <li class="nav-item">
                        <a class="nav-link fs-3 text-dark" href="#">Giao hàng thành công</a>
                    </li>

                </ul>
                <div class="row mt-4">
                    <?php foreach ($orders as $value) : ?>
                        <div class="col-lg-6 col-12 voucher shadow-lg d-flex justify-content-between mb-5 p-4">
                            <img src="./public/img/delivery.gif" alt="" class="w-25">
                            <div class="d-flex align-items-center justify-content-center flex-fill flex-column">
                                <p class="fw-bold">Đơn hàng ngày :<span class="text-red"> <?= $value["date_time"] ?></span></p>
                                <p class="fw-bold">Tổng tiền: <span class="text-red"><?= $value["total"] ?>đ</span></p>
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
  <?php
        require_once("./controller/config.php");
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
        ?>
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