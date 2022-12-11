<?php require_once("header.php") ?>
    <!-- end header -->
    <div class="box-table" >
        <form action="" class="tabel-form">
            <table class="table-main" id="table1">
                <thead>
                <tr>
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
                        <td><?= $value['product_name']?></td>
                        <td style="text-align: center;"><?= $value['countCmt']?></td>
                        <td style="text-align: center;"><?= $value['min_time'] ?></td>
                        <td style="text-align: center;"><?= $value['max_time'] ?></td>
                        <td style="text-align: center;"><a href="?ctr=detail-comment&idpro=<?=$value['idpro']?>">
                                <input role="button" class="btn2" value="Chi Tiết">
                            </a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </form>
    </div>
<?php require_once("footer.php") ?>