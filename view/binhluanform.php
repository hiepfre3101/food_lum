<?php
include "../model/m_comment.php";
$idpro= $_REQUEST['idpro'];
$dsbl= getCommentByProductId($idpro);

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
          <link rel="stylesheet" href="./public/css/base.css">
        <link rel="stylesheet" href="./public/css/header.css">
        <link rel="stylesheet" href="./public/css/footer.css">
        <link rel="stylesheet" href="../public/css/product_detail.css">
    <body>
    <div class="container-comment">
            <h3 class="dg">Đánh Giá Sản Phẩm</h3>

            <div class="container-star">
                <div class="star">
                    <p class="ad">4.7 trên 5 </p>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
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
                        <form action="?ctr=add-comment" method="post">
                        <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input
                                type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio"
                                name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio"
                                name="rating" value="1" id="1"><label for="1">☆</label>
                        </div>
                        <div class="comment-area"> <textarea class="form-control" placeholder="Nội dung..."
                                rows="4" name="content"></textarea> </div>
                        <div class="text-center mt-4"> <button class="btn btn-success send px-5" name="guibinhluan" type="submit"> Đăng bình luận <i
                                    class="fa fa-long-arrow-right ml-1"></i></button> </div>
                                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                                    
                        </form>
                    </div>
            <div class="cmt-wrapper p-3">
            <?php
                foreach($dsbl as $bl){
                    extract($bl);
                echo '<div class="comment">
                    <div class="comment-left">
                        <img class="img2" src="'.$avatar.'" alt="">
                    </div>
                    <div class="comment-right">
                        <p class="name" style="margin-right: 100%;">'.$user_name.'</p>
                        <div class="star2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="date">'.$time_send.'</div>
                        <div class="comment-user">'.$content.'</div>
                        
                    </div>
                    <hr>
                </div>
                
            </div>';
        }
        ?>  
        </div>

        <!--Optional JavaScript-->
        <!--jQuery first, then Popper.js, then Bootstrap JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>


