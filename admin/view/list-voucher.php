<?php require_once("header.php") ?>
    <!-- end header -->
    <div class="box-table">
        <a href="?ctr=add-voucher" class="btn-add">
            <button type="button">Thêm voucher</button>
        </a>
        <table class="table-main" id="table1">
            <thead>
            <tr>

                <th>Giảm giá (%)</th>
                <th>Số Lượng</th>
                <th>Điều kiện sử dụng</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày hết hạn</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($arrVoucher as $key => $value) { ?>
                <tr>
                    <td><?=$value['discount']?></td>
                    <td><?= $value['quantity'] ?></td>
                    <td><?= $value['conditionVoucher'] ?></td>
                    <td><?= $value['start_date'] ?></td>
                    <td><?= $value['exp_date'] ?></td>
                    <td>
                        <a onclick="return confirm('Bạn có muốn xóa chứ ?')" href="?ctr=delete-voucher&&idDelete=<?=$value['idvc']?>">
                            <button class="btn-2" type="button">Xóa</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
<?php require_once("footer.php") ?>