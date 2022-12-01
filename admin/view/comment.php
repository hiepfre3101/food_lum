<?php require_once("header.php") ?>
    <!-- end header -->
    <div class="box-table" >
        <div class="action">
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
                    <th>Tên Sản Phẩm</th>
                    <th>Số lượng bình luận</th>
                    <th>Cũ Nhất</th>
                    <th>Mới Nhất</th>
                    <th>Xem Chi Tiết</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrComment as $value) { ?>
                    
                    <tr>
                        <td><input type="checkbox" name="<?= $value['id'] ?>"></td>
                        <td><?= $value['product_name']?></td>
                        <td><?= $value['countCmt']?></td>
                        <td><?= $value['min_time'] ?></td>
                        <td><?= $value['max_time'] ?></td>
                        <td><a href="?ctr=detail-comment&idpro=<?=$value['idpro']?>">
                                <input role="button" class="btn2" value="Chi Tiết">
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
                        echo "?ctr=comment-list&&page=$count#table1";
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
                            <a href="<?= "?ctr=comment-list&&page=$item" ?>#table1"><?= $item ?></a></div>
                    <?php } ?>
                </div>
                <div class="pagination-right">
                    <a href="<?php
                    if (isset($_GET['page']) && $_GET['page'] < $countPage) {
                        $count = $_GET['page'];
                        $count += 1;
                        echo "?ctr=comment-list&&page=$count#table1";
                    }
                    if (!isset($_GET['page'])) {
                        echo "?ctr=comment-list&&page=2#table1";
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