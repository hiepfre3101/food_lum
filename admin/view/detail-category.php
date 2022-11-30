<?php require_once("header.php") ?>
    <!-- end header -->

    <div class="box-table">
        <div class="box-detail-category">
            <div class="left">
                <p>Tên danh mục : <span><?= getOneDataCategory($_GET['id'])['categories_name'] ?></span></p>
            </div>
            <div class="right">
                <img src="<?= getOneDataCategory($_GET['id'])['image'] ?>" alt="">
            </div>
        </div>
        <p class="title">Các sản phẩm thuộc danh mục này</p>
        <form action="?ctr=update-category-product&&id=<?=$_GET['id']?>" method="post" class="tabel-form">
            <div class="action">
                <a onclick="return confirm('Bạn chắc chắn muốn xóa chứ.')" href="?ctr=delete-category&&id=<?= $_GET['id'] ?>">
                    <button type="button" class="btn-delete">Xóa danh mục</button>
                </a>
                <a>
                    <button id="checkAll" type="button">Chọn tất cả</button>
                </a>
                <a>
                    <select disabled class="form-control form-new" name="category" id="category-form">
                        <option value="0">Chuyển tới</option>
                        <?php foreach ($categories as $value1): ?>
                            <option value="<?= $value1["iddm"] ?>"> <?= $value1["categories_name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </a>
                <a>
                    <button type="submit" disabled id="btn-save" name="btn-save">Lưu tất cả chỉnh sửa</button>
                </a>
            </div>
            <?php if (isset($_GET['erro'])) { ?><p id="erro-message" style="color: red;margin: 20px 0px">Vui lòng chuyển các sản phẩm ở
                danh mục hiện tại sang danh mục khác
                để thực hiện xóa danh mục hiện tại.</p><?php } ?>
            <table class="table-main" id="table1">
                <thead>
                <tr>
                    <th>Chọn</th>
                    <th>Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Danh mục</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrProducts as $value) { ?>
                    <tr>
                        <td><input type="checkbox" name="<?= $value['idpro'] ?>"></td>
                        <td><img src="<?= getImg($value['idpro'])[0]['src'] ?>" alt=""></td>
                        <td><?= $value['product_name'] ?></td>
                        <td>
                            <select class="form-control" name="category-<?=$value['idpro']?>" id="category-form-1">
                                <?php foreach ($categories as $value1): ?>
                                    <option value="<?= $value1["iddm"] ?>" <?= ($value1['iddm'] == $value['iddm']) ? "selected" : "" ?>> <?= $value1["categories_name"] ?></option>
                                <?php endforeach ?>
                            </select>
                        </td>
                        <td><a href="?ctr=update-oneCategory-product">
                                <button class="btn-1" type="submit">Lưu chỉn sửa</button>
                            </a>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </form>
    </div>
<?php require_once("footer.php") ?>