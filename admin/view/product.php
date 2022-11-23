<?php require_once("header.php") ?>
    <!-- end header -->

    <div class="box-table">
        <div class="action">
            <a href="">
                <button>Thêm Sản Phẩm</button>
            </a>
            <a href="">
                <button>Chọn Tất Cả</button>
            </a>
            <a href="">
                <button>Xóa Các Mục Đã Chọn</button>
            </a>
        </div>
        <form action="" class="tabel-form">
            <table class="table-main">
                <thead>
                <tr>
                    <th>Chọn</th>
                    <th>Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá Tiền</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrProducts as $value) { ?>
                    <tr>
                        <td><input type="checkbox" name="<?=$value['idpro']?>"></td>
                        <td><img src="<?=$value['image']?>" alt=""></td>
                        <td><?=$value['product_name']?></td>
                        <td><?=$value['product_price']?></td>
                        <td><a href="">
                                <button class="btn-1">Sửa</button>
                            </a><a href="">
                                <button class="btn2">Xóa</button>
                            </a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="pagination">
                <div class="pagination-left">
                    <a href="">
                    <span class="material-symbols-outlined">
                        navigate_before
                    </span>
                    </a>
                </div>
                <div class="box-pagination">
                    <div class="pagination-item"><a href="">1</a></div>
                    <div class="pagination-item active"><a href="">2</a></div>
                    <div class="pagination-item"><a href="">3</a></div>
                </div>
                <div class="pagination-right">
                    <a href="">
                    <span class="material-symbols-outlined">
                        navigate_next
                    </span>
                    </a>
                </div>
            </div>
        </form>
    </div>
<?php require_once("footer.php") ?>