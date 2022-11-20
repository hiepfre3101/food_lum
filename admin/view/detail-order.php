<?php require_once("header.php")?>
<!-- end header -->
<div class="box-detail-order">
    <p class="title">Thông tin đơn hàng</p>
    <div class="sub-detail-order">
        <div class="info-clident">
            <form action="">
                <p class="name-clident">Họ và tên : <span>Nguyễn Ánh Dương</span></p>
                <p class="phone">Số điện thoại : <span>0869935501</span></p>
                <p class="address">Địa chỉ : <span>Hà Tây</span></p>
                <p class="total-price">Tổng đơng hàng : <span>1000000</span>đ</p>
                <div class="btn-status">
                    <input type="radio" hidden name="status" id="check1">
                    <label for="check1">Đơn Hàng Mới</label>
                    <input type="radio" hidden name="status" id="check2">
                    <label for="check2">Xác Nhận Đơn</label>
                    <!-- <input type="radio" hidden name="status" id="check3">
                                <label for="check3">Giao Thành Công</label> -->
                </div>
                <button>Cập nhật trạng thái</button>
            </form>
        </div>
        <div class="list-product-order">
            <div class="item-order-product">
                <div class="item-left">
                    <img src="https://picsum.photos/200" alt="">
                </div>
                <div class="item-right">
                    <p class="name-product-order">Sản phẩm : <span>Nguyễn Ánh Dương</span></p>
                    <p class="quantity-porduct-order">Số Lượng : <span>10</span></p>
                </div>
            </div>
            <div class="item-order-product">
                <div class="item-left">
                    <img src="https://picsum.photos/200" alt="">
                </div>
                <div class="item-right">
                    <p class="name-product-order">Sản phẩm : <span>Nguyễn Ánh Dương</span></p>
                    <p class="quantity-porduct-order">Số Lượng : <span>10</span></p>
                </div>
            </div>
            <div class="item-order-product">
                <div class="item-left">
                    <img src="https://picsum.photos/200" alt="">
                </div>
                <div class="item-right">
                    <p class="name-product-order">Sản phẩm : <span>Nguyễn Ánh Dương</span></p>
                    <p class="quantity-porduct-order">Số Lượng : <span>10</span></p>
                </div>
            </div>
            <div class="item-order-product">
                <div class="item-left">
                    <img src="https://picsum.photos/200" alt="">
                </div>
                <div class="item-right">
                    <p class="name-product-order">Sản phẩm : <span>Nguyễn Ánh Dương</span></p>
                    <p class="quantity-porduct-order">Số Lượng : <span>10</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once("footer.php")?>