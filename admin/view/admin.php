<?php require_once("header.php") ?>
    <!-- end header -->
    <div class="box-table">
        <form action="?ctr=admin-delete-user" method="post" class="tabel-form">
            <div class="action">
                <a>
                    <button id="checkAll" type="button">Chọn Tất Cả</button>
                </a>
                <a>
                    <button id="btn-save" onclick="return confirm('Bạn có muốn xóa chứ ?')" disabled type="submit">
                        Xóa Các Mục Đã Chọn
                    </button>
                </a>
            </div>
            <table class="table-main" id="table1">
                <thead>
                <tr>
                    <th>Chọn</th>
                    <th>Ảnh</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrUser as $value) { ?>
                    <tr>
                        <td><input type="checkbox" name="<?=$value['iduser']?>"></td>
                        <td><img src="<?=$value['avatar']?>" alt=""></td>
                        <td><?=$value['full_name'] ?></td>
                        <td><?=$value['phone'] ?></td>
                        <td>
                            <a href="?ctr=detail-user&&id=<?=$value['iduser']?>"><button type="button">Chi tiết</button></a>
                            </a><a onclick="return confirm('Bạn có muốn xóa chứ ?')" href="?ctr=admin-delete-user&&idDelete=<?=$value['iduser']?>">
                                <button class="btn-2" type="button">Xóa</button>
                            </a></td>
                        </td>
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
                        echo "?ctr=user-list&&page=$count#table1";
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
                            <a href="<?= "?ctr=user-list&&page=$item" ?>#table1"><?= $item ?></a></div>
                    <?php } ?>
                </div>
                <div class="pagination-right">
                    <a href="<?php
                    if (isset($_GET['page']) && $_GET['page'] < $countPage) {
                        $count = $_GET['page'];
                        $count += 1;
                        echo "?ctr=user-list&&page=$count#table1";
                    }
                    if (!isset($_GET['page'])) {
                        echo "?ctr=user-list&&page=2#table1";
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