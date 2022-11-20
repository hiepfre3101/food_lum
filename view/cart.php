<?php include_once("./view/header.php") ?>

<link rel="stylesheet" href="./public/css/cart.css">
<div class="container">
  <h4 class="card-title mb-4 ghct">GIỎ HÀNG CỦA TÔI</h4>
  <div class="row">
    <div class="col-lg-8 overflow-auto cart-wrapper">
      <div class="giohang">
        <img class="gh1" src="https://static.kfcvietnam.com.vn/images/items/lg/Pepsi-Can.jpg?v=30YRKL" alt="">
        <div class="tengh">
          <p class="namegh">Pepsi Lon</p>

          <span class="input-group-text btn btn-danger" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> - </span>
          <input type="number" value="1" class="form-control text-center" min="1" max="100">
          <span class="input-group-text btn btn-success" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"> + </span>
          <p class="pr">10000 <span>đ</span></p>
        </div>
        <div class="xn">
          <a class="cn" href="">Xoá</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="giohang-right">
        <p class="mon">2 MÓN</p>
        <hr class="hr">
        <p class="gg">Bạn có Mã giảm giá?</p>
        <div class="vc">
          <select class="vou" name="" id="">
            <option value="0" selected>Chọn voucher</option>
            <option value="">Minh</option>
            <option value="">Minh</option>
            <option value="">Minh</option>
          </select>
          <button class="ad px-2" type="submit">Áp dụng</button>
        </div>
        <br>
        <hr class="hr">
        <p class="tdh">Tổng đơn hàng <span class="tdh1">50000đ</span></p>
        <p class="tdh">Phí giao hàng <span class="tdh1">10000đ</span></p>
        <p class="ttt">Tổng thanh toán <span class="ttt1">60000đ</span></p>
        <hr class="hr">
        <button class="thanhtoan" type="submit">Thanh toán</button>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="recomend w-100 p-4 h-50">
    <h2 class="dg fw-semibold ">Sản phẩm tương tự</h2>
    <div class="row">
      <div class="col-md-4 col-6 position-relative">
        <a href="#">
          <img class="img4" src="https://static.kfcvietnam.com.vn/images/items/lg/Chikoyaki_C.jpg?v=4pbPw3" alt="">
        </a>
        <a href="#" class="d-flex align-items-center justify-content-center p-3 position-absolute top-10 end-10 rounded-circle bg-primary h-15 w-10  text-white text-decoration-none">
          <span class="fw-semibold fs-3 ">+</span>
        </a>
        <div class="w-75 d-flex justify-content-around position-absolute bottom-0 flex-wrap">
          <p class="text-white fw-semibold">Gà Giòn Cay</p>
          <p class="text-white fw-semibold">60000</p>
        </div>
      </div>
      <!--  -->
      <div class="col-md-4 col-6 position-relative mb-2">
        <a href="#">
          <img class="img4" src="https://static.kfcvietnam.com.vn/images/items/lg/Chikoyaki_C.jpg?v=4pbPw3" alt="">
        </a>
        <a href="#" class="d-flex align-items-center justify-content-center p-3 position-absolute top-10 end-10 rounded-circle bg-primary h-15 w-10  text-white text-decoration-none">
          <span class="fw-semibold fs-3 ">+</span>
        </a>
        <div class="w-75 d-flex justify-content-around position-absolute bottom-0 flex-wrap">
          <p class="text-white fw-semibold">Gà Giòn Cay</p>
          <p class="text-white fw-semibold">60000</p>
        </div>
      </div>
      <!--  -->
      <div class="col-md-4 col-6 position-relative">
        <a href="#">
          <img class="img4" src="https://static.kfcvietnam.com.vn/images/items/lg/Chikoyaki_C.jpg?v=4pbPw3" alt="">
        </a>
        <a href="#" class="d-flex align-items-center justify-content-center p-3 position-absolute top-10 end-10 rounded-circle bg-primary h-15 w-10  text-white text-decoration-none">
          <span class="fw-semibold fs-3 ">+</span>
        </a>
        <div class="w-75 d-flex justify-content-around position-absolute bottom-0 flex-wrap">
          <p class="text-white fw-semibold">Gà Giòn Cay</p>
          <p class="text-white fw-semibold">60000</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once("./view/footer.php") ?>