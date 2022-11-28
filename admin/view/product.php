<?php require_once("header.php") ?>
    <!-- end header -->

    <div class="box-table" >
        <div class="action">
            <a href="?ctr=add-product">
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
            <table class="table-main" id="table1">
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
                        <td><input type="checkbox" name="<?= $value['idpro'] ?>"></td>
                        <td><img src="<?= getImg($value['idpro'])[0]['src'] ?>" alt=""></td>
                        <td><?= $value['product_name'] ?></td>
                        <td><?= $value['product_price'] ?></td>
                        <td><a href="">
                                <button class="btn-1">Sửa</button>
                            </a><a href="">
                                <button class="btn2">Xóa</button>
                            </a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <!--hiên thị số trang hiện có-->

            <div class="pagination">
                <div class="pagination-left">
                    <a href="<?php if (isset($_GET['page']) && $_GET['page'] >= 2) {
                        $count = $_GET['page'];
                        $count -= 1;
                        echo "?ctr=product-list&&page=$count#table1";
                    } ?>">
                    <span class="material-symbols-outlined">
                        navigate_before
                    </span>
                    </a>
                </div>
                <div class="box-pagination">
                    <?php for ($item = 1; $item <= $countPage; $item++) { ?>
                        <div class="pagination-item
                        <?php if (empty($_GET['page'])) {
                            if ($item == 1) {
                                echo "active";
                            }
                        } else if ($item == $_GET['page']) {
                            echo "active";
                        } ?>">
                            <a href="<?= "?ctr=product-list&&page=$item" ?>#table1"><?= $item ?></a></div>
                    <?php } ?>
                </div>
                <div class="pagination-right">
                    <a href="<?php
                    if (isset($_GET['page']) && $_GET['page'] < $countPage) {
                        $count = $_GET['page'];
                        $count += 1;
                        echo "?ctr=product-list&&page=$count#table1";
                    }
                    if (!isset($_GET['page'])) {
                        echo "?ctr=product-list&&page=2#table1";
                    }
                    ?>">
                    <span class="material-symbols-outlined">
                        navigate_next
                    </span>
                    </a>
                </div>
            </div>
            <!-- end-->
        </form>
    </div>
<?php require_once("footer.php") ?>