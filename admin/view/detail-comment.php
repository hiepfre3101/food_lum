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
        </form>
    </div>
<?php require_once("footer.php") ?>