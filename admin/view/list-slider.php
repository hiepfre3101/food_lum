<?php require_once("header.php") ?>
    <!-- end header -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <div class="box-table">
        <form class="slider-form" action="?ctr=slider-form" method="post" enctype="multipart/form-data">
            <a href="?ctr=add-slider">
                <button type="button">Thêm slider</button>
            </a>
            <button type="button" class="btn-slider">Sửa slider</button>
            <button disabled type="submit" class="btn-save-slider">Lưu chỉnh sửa</button>
            <div class="mai-slider">
                <!-- Swiper -->
                <div class="swiper mySwiper">

                    <div class="swiper-wrapper">
                        <?php foreach ($arrSlider as $value) { ?>
                            <div class="swiper-slide">
                                <p>
                                    <input readonly class="title-slider" name="title-<?= $value['id'] ?>"
                                           value="<?= $value['title'] ?>">
                                    <input readonly class="desc-slider" name="desc-<?= $value['id'] ?>"
                                           value="<?= $value['description'] ?>">
                                </p>
                                <label for="img-form-<?= $value['id'] ?>" class="material-symbols-outlined add">
                                    add_photo_alternate
                                </label>
                                <img class="slider-img-<?= $value['id'] ?>" src="<?= $value['image'] ?>" alt="">
                                <input type="number" value="<?= $value['id'] ?>" hidden class="id-slider">
                                <input type="file" name="slider-<?= $value['id'] ?>" id="img-form-<?= $value['id'] ?>"
                                       hidden>
                                <a onclick="return confirm('Bạn chắc chắn muốn xóa slider này chứ')" href="?ctr=delete-slider&&id=<?=$value['id']?>" class="delete-slider">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

                <!-- Swiper JS -->
                <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
                <!-- Initialize Swiper -->
                <script>
                    var swiper = new Swiper(".mySwiper", {
                        cssMode: true,
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                        pagination: {
                            el: ".swiper-pagination",
                        },
                        mousewheel: true,
                        keyboard: true,
                    });
                </script>
            </div>
        </form>
    </div>

<?php require_once("footer.php") ?>