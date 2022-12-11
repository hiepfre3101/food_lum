<?php require_once("header.php")?>
    <!-- end header -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <div class="container">
        <div class="cards row mt-5">
            <div class="card-single col d-flex justify-content-around bg-info text-white py-5">
                <div>
                    <p><h3 class="font-weight-bold w-75 money-js"><?=$countdt["income"]?></h3>VND</p>
                    <a href="#" style="color: white; text-decoration:none;"><span>Doanh thu</span></a>
                </div>
                <div>
                    <i class="fas fa-th-list" style="font-size:3rem;"></i>
                </div>
            </div>
            <div class="card-single col d-flex justify-content-around bg-warning text-white py-5 ms-3">
                <div>
                    <h1 class="font-weight-bold"><?=$countsp?></h1>
                    <a href="?ctr=product-list" style="color: white; text-decoration:none;"><span>Sản phẩm</span></a>
                </div>
                <div>
                    <i class="fas fa-sitemap" style="font-size: 3rem;"></i>
                </div>
            </div>
            <div class="card-single col d-flex justify-content-around bg-danger text-white py-5 ms-3">
                <div>
                    <h1 class="font-weight-bold"><?=$countkh?></h1>
                    <a href="index.php?ctr=user-list" style="color: white; text-decoration:none;"><span>Khách hàng</span></a>
                </div>
                <div>
                    <i class="fas fa-users" style="font-size: 3rem;"></i>
                </div>
            </div>
            <div class="card-single col d-flex justify-content-around bg-success text-white py-5 ms-3">
                <div>
                    <h1 class="font-weight-bold"><?=$countod?></h1>
                    <a href="?ctr=list-order" style="color: white; text-decoration:none;"><span>Đơn hàng mới</span></a>
                </div>
                <div>
                    <i class="fa-solid fa-cart-shopping" style="font-size: 3rem;"></i>
                </div>
            </div>
        </div>
    </div>
    <article  style="margin-top:4rem;">
           <p class="fw-semibold fs-3 position-relative title-yellow ms-5">Sản phẩm cần cải thiện</p>
           <table class="table-main w-100 fs-4" id="table1">
                <thead>
                <tr>
                    <th>Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá Tiền</th>
                    <th>Số lượng bán ra</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($badProducts as $value) { ?>
                    <tr>
                        <td class="p-0 w-75"><img src="<?=getImg($value["idpro"])[0]["src"]?>" alt=""></td>
                        <td><?= $value['product_name'] ?></td>
                        <td><?= $value['product_price'] ?></td>
                        <td><?= $value['selled'] ?></td>
                        <td><a href="?ctr=form-update&&id=<?=$value['idpro']?>">
                                <button type="button" class="btn-1">Sửa</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
    </article>
    <article  style="margin-top:4rem;">
           <p class="fw-semibold fs-3 position-relative title-green ms-5">Sản phẩm bán chạy</p>
           <table class="table-main w-100 fs-4" id="table1">
                <thead>
                <tr>
                    <th>Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá Tiền</th>
                    <th>Số lượng bán ra</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($bestProducts as $value) { ?>
                    <tr>
                        <td class="p-0 w-75"><img src="<?=getImg($value["idpro"])[0]["src"]?>" alt=""></td>
                        <td><?= $value['product_name'] ?></td>
                        <td><?= $value['product_price'] ?></td>
                        <td><?= $value['selled'] ?></td>
                        <td><a href="?ctr=form-update&&id=<?=$value['idpro']?>">
                                <button type="button" class="btn-1">Sửa</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
    </article>
  
   

    <!--  -->
    <script src="./public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<?php require_once("footer.php")?>