<?php require_once("header.php") ?>
    <!-- end header -->

    <div class="box-table" >
        <div class="action">
        <a href="?ctr=comment-list">
                <button>Trở Về</button>
            </a>
        </div>
        <h1 style="padding-top: 20px;">Sản Phẩm: <?= $result['product_name']?></h1>
        <form action="" class="tabel-form">
            <table class="table-main" id="table1">
                <thead>
                <tr>
                    <th>Nội dung</th>
                    <th>Ngày Bình luận</th>
                    <th>Người bình luận</th>
                    <th>Thao Tác</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cmt as $value) { ?>
                    <tr>
                        <td><?= $value['content']?></td>
                        <td><?= $value['time_send']?></td>
                        <td style="text-align: center;"><?= $value['full_name'] ?></td>
                       
                        <td style="text-align: center;"><a onclick="return confirm('Bạn có muốn xóa chứ ?')" href="?ctr=delete-comment&&idDelete=<?=$value['idcm']?>">
                                <input role="button" class="btn2"value="Xóa">
                            </a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <!--hiên thị số trang hiện có-->

       <div style="<?php if($countPage == 1) echo "display:none;" ?>">
                <div class="pagination">
                    <div class="pagination-left">
                        <a href="<?php if (isset($_GET['page']) && $_GET['page'] >= 2) {
                            $count = $_GET['page'];
                            $count -= 1;
                            echo "?ctr=detail-comment&&page=$count#table1";
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
                                <a href="<?= "?ctr=detail-comment&&page=$item" ?>#table1"><?= $item ?></a></div>
                        <?php } ?>
                    </div>
                    <div class="pagination-right">
                        <a href="<?php
                        if (isset($_GET['page']) && $_GET['page'] < $countPage) {
                            $count = $_GET['page'];
                            $count += 1;
                            echo "?ctr=detail-comment&&page=$count&&idpro=$idpro#table1";
                        }
                        if (!isset($_GET['page'])) {
                            echo "?ctr=detail-comment&&page=2&&idpro=$idpro#table1";
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