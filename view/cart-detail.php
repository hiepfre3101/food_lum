<?php include_once ("./view/header.php")?>
<div class="container-fluid bg-dark py-4">
            <div class="d-flex align-items-center justify-content-center">
                <div class="w-60 justify-content-md-end d-flex flex-wrap justify-content-sm-start">
                    <div class="d-flex justify-content-end align-items-center h-100 me-3">
                        <i class="fa-solid fa-location-dot text-gray fs-4"></i>
                        <span class="ms-3 text-white fw-semibold fs-4">Giao hàng tận nơi: </span>
                        <span class="ms-3 text-white fw-semibold fs-4">Hà Đông</span>
                    </div>
                    <div class=" d-flex justify-content-start align-items-center">
                        <i class="fa-solid fa-clock text-gray fs-4"></i>
                        <span class="ms-2 text-white fw-semibold fs-4">Giao ngay</span>
                    </div>
                </div>
                <div class="ms-4 w-40 d-flex justify-content-xs-end align-items-center">
                    <button role="button"
                        class=" rounded-5 text-white bg-transparent btn-outline-white px-3 py-2 fs-4 fw-bold">Thay
                        đổi</button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h4 class="card-title mb-4 ttdh"><i class="fa-solid fa-lock"></i>THÔNG TIN ĐẶT HÀNG</h4>
                    <div class="tggh">
                        <p class="tggh1">THỜI GIAN GIAO HÀNG:</p>
                        <p class="gn">Giao ngay</p>
                    </div>
                    <div class="tggh">
                        <p class="tggh1">GIAO TỚI:</p>
                        <form>
                            <div class="form-group">
                                <label for="" class="form-label formlb">Địa chỉ</label>
                                <input name="" class="form-control form1" type="text">
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <label for="" class="form-label formlb">Ghi chú cho đơn hàng</label>
                                <input name="" class="form-control form1" type="text">
                            </div> <!-- form-group// -->                                                         
                        </form>
                        <br>
                    </div>
                    <br>
                    <div class="tggh">
                        <p class="tggh1">THÔNG TIN CHI TIẾT:</p>
                        <form>
                            <div class="form-group">
                                <label for="" class="form-label formlb">Họ và tên*</label>
                                <input name="" class="form-control form1" type="text">
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <label for="" class="form-label formlb">Số điện thoại*</label>
                                <input name="" class="form-control form1" type="text">
                            </div> <!-- form-group// -->   
                            <div class="form-group">
                                <label for="" class="form-label formlb">Địa chỉ email*</label>
                                <input name="" class="form-control form1" type="text">
                            </div> <!-- form-group// -->                                                         
                        </form>
                        <br>
                    </div>
                    <br>
                    <div class="tggh">
                        <div class="tggh">
                            <p class="tggh1">PHƯƠNG THỨC THANH TOÁN:</p>
                            <fieldset>
                                <div class="form__radio">
                                  <label for=""><svg class="icon">
                                    </svg><i class="fa-solid fa-money-bill-1-wave fa-2x"></i>Thanh toán khi nhận hàng</label>
                                  <input checked id="" name="" type="radio" />
                                </div>                                                      
                            </fieldset>                        
                            <div>
                            <br>
                        </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-block dathang"> Đặt hàng </button>
                </div>
                <div class="col-lg-5">
                    <div class="container">
                    <div class="giohang-right1 ">
                        <p class="mon">TÓM TẮT ĐƠN HÀNG</p>
                        <p class="ttt">2x 1 Miếng Gà Chikoyaki <span class="ttt1">80000đ</span></p>                        
                        <hr class="hr1">
                        <p class="tdh">Tổng đơn hàng <span class="tdh1">50000đ</span></p>
                        <p class="tdh">Phí giao hàng <span class="tdh1">10000đ</span></p>
                        <p class="ttt">Tổng thanh toán <span class="ttt1">60000đ</span></p>
                       <br>
                      </div>
                    </div>
                </div>
            </div>
        </div>

<?php include_once ("./view/footer.php")?>