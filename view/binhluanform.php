<?php
include "../model/m_comment.php";
$idpro= $_REQUEST['idpro'];
$dsbl= getCommentByProductId($idpro);
$ds=loadstar($idpro);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>My Page Title</title>
        <!--Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    </head>
          <link rel="stylesheet" href="../public/css/base.css">
        <link rel="stylesheet" href="../public/css/header.css">
        <link rel="stylesheet" href="../public/css/footer.css">
        <link rel="stylesheet" href="../public/css/product_detail.css">
        <script src="https://kit.fontawesome.com/e6b03d2b34.js" crossorigin="anonymous"></script>

    <body>
    <div class="container-comment">
            <h3 class="dg">Đánh Giá Sản Phẩm</h3>
            <div class="star">
                    <p class="ad"><?= $ds['avgstar'] ?>/5<span class="review_rating1 fa fa-star"></span></p>                  
                </div>
            <div class="container-star">               
                <div class="star1">
                    <input class="s" type="button" value="Tất Cả">
                    <input class="s" type="button" value="5 Sao">
                    <input class="s" type="button" value="4 Sao">
                    <input class="s" type="button" value="3 Sao">
                    <input class="s" type="button" value="2 Sao">
                    <input class="s" type="button" value="1 Sao">
                </div>                
            </div>         
            <div class="comment-box text-center">
                        <h4>Để lại bình luận</h4>
                        <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">   
                        <div class="rating" >
                            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                             <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                        </div>
                        <!-- <h5 class="text-center"><i class="text-danger">Bạn đã đánh giá</i></h5> -->
                        <div class="comment-area"> <textarea class="form-control" placeholder="Nội dung..."
                                rows="4" name="content"></textarea> </div>
                        <div class="text-center mt-4"> <input class="btn btn-success send px-5" name="guibinhluan" type="submit" value="Đăng bình luận"></div>
                                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                                    
                        </form>                        
                    </div>
            <div class="cmt-wrapper p-3">
            <?php foreach($dsbl as $bl) :?>
                <div class="comment d-flex justify-content-start mt-3 p-3">
                    <div class="comment-left w-5 h-25 rounded-circle overflow-hidden">
                        <img class="img2 w-100  rounded-circle" src="<?=$bl['avatar']?>" alt="">
                    </div>
                    <div class="comment-right px-3">
                        <p class="name text-dark fw-bold"><?=$bl['full_name']?></p>
                        <div class="star2">
                        <?php for ($i = 1; $i <= $bl['rating']; $i++) {
                        echo '<span class="review_rating fa fa-star fs-7"></span>';
                    } ?>
                        </div>
                        <div class="comment-user fs-4"><?=$bl['content']?></div>                        
                        <div class="date fs-6"><?=$bl['time_send']?></div>
                    </div>
                    <hr>
                </div>
            <?php endforeach ?>           
            </div> 
        </div>

        <?php
        if(isset($_SESSION['idUser'])){
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $content=$_POST['content'];
                    $idpro=$_POST['idpro'];
                    $iduser=$_SESSION['idUser'];
                    $time_send = date("Y-m-d");
                    $rating=$_POST['rating'];
                    insert_binhluan($content,$iduser,$idpro,$time_send,$rating);
                    header("location: ".$_SERVER['HTTP_REFERER']);
                }
            }

        ?>

        <!--Optional JavaScript-->
        <!--jQuery first, then Popper.js, then Bootstrap JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>


