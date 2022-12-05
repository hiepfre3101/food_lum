<?php require_once("header.php") ?>
    <!-- end header -->
    <div class="box-table">
        <p class="title">Danh sách đơn hàng</p>
        <form action="" class="tabel-form">
            <table class="table-main" id="table1">
                <thead>
                <tr>
                    <th>Mã</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Tổng đơn</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrOrder as $value) { ?>
                    <tr>
                        <td><?= $value['idorder'] ?></td>
                        <td><?= getOneDataUser($value['id_user'])['full_name'] ?></td>
                        <td><?= getOneDataUser($value['id_user'])['phone'] ?></td>
                        <td><?= $value['total'] ?>đ</td>
                        <td>
                            <a href="?ctr=detail-order&&idOrder=<?= $value['idorder'] ?>&&idUser=<?=$value['id_user']?>&&status=<?=($_GET['ctr']=="list-order")?"1":"2"?>">
                                <button type="button">Chi tiết</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <!--hiên thị số trang hiện có-->
            <div style="<?php if($countPage == 1)echo "display:none;"?>">
            <div class="pagination">
                <div class="pagination-left">
                    <a href="<?php if (isset($_GET['page']) && $_GET['page'] >= 2) {
                        $count = $_GET['page'];
                        $count -= 1;
                        echo "?ctr=list-order&&page=$count#table1";
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
                            <a href="<?= "?ctr=list-order&&page=$item" ?>#table1"><?= $item ?></a></div>
                    <?php } ?>
                </div>
                <div class="pagination-right">
                    <a href="<?php
                    if (isset($_GET['page']) && $_GET['page'] < $countPage) {
                        $count = $_GET['page'];
                        $count += 1;
                        echo "?ctr=list-order&&page=$count#table1";
                    }
                    if (!isset($_GET['page'])) {
                        echo "?ctr=list-order&&page=2#table1";
                    }
                    ?>">
                    <span class="material-symbols-outlined">
                        navigate_next
                    </span>
                    </a>
                </div>
            </div>
            </div>
            <!-- end-->
        </form>
    </div>
<?php require_once("footer.php") ?>