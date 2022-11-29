<?php require_once("header.php") ?>
    <!-- end header -->

    <div class="box-table" >
        <div class="action">
            <a href="?ctr=add-category">
                <button>Thêm Danh Mục</button>
            </a>
        </div>
        <form action="" class="tabel-form">
            <table class="table-main" id="table1">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Ảnh</th>
                    <th>Tên Danh Mục</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrCategories as $value) { ?>
                    <tr>
                        <td><?= $value['iddm'] ?></td>
                        <td><img src="<?= $value['image'] ?>" alt=""></td>
                        <td><?= $value['categories_name'] ?></td>
                        <td><a href="?ctr=update-category&&id=<?=$value['iddm']?>">
                                <button type="button" class="btn-1">Sửa</button>
                            </a><a href="?detail-category&&id=<?=$value['iddm']?>">
                                <button type="button" class="btn2">Chi Tiết</button>
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
                        echo "?ctr=list-category&&page=$count#table1";
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
                            <a href="<?= "?ctr=list-category&&page=$item" ?>#table1"><?= $item ?></a></div>
                    <?php } ?>
                </div>
                <div class="pagination-right">
                    <a href="<?php
                    if (isset($_GET['page']) && $_GET['page'] < $countPage) {
                        $count = $_GET['page'];
                        $count += 1;
                        echo "?ctr=list-category&&page=$count#table1";
                    }
                    if (!isset($_GET['page'])) {
                        echo "?ctr=list-category&&page=2#table1";
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