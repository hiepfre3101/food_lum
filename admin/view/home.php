<?php require_once("header.php")?>
    <!-- end header -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="container">
        <div class="cards row mt-5">
            <div class="card-single col d-flex justify-content-around bg-info text-white py-5 ml-3">
                <div>
                    <h1 class="font-weight-bold"><?=$countdm?></h1>
                    <a href="?ctr=list-category" style="color: white; text-decoration:none;"><span>Danh mục</span></a>
                </div>
                <div>
                    <i class="fas fa-th-list" style="font-size: 80px;"></i>
                </div>
            </div>
            <div class="card-single col d-flex justify-content-around bg-warning text-white py-5 ml-3">
                <div>
                    <h1 class="font-weight-bold"><?=$countsp?></h1>
                    <a href="?ctr=product-list" style="color: white; text-decoration:none;"><span>Sản phẩm</span></a>
                </div>
                <div>
                    <i class="fas fa-sitemap" style="font-size: 80px;"></i>
                </div>
            </div>
            <div class="card-single col d-flex justify-content-around bg-danger text-white py-5 ml-3">
                <div>
                    <h1 class="font-weight-bold"></h1>
                    <a href="index.php?act=dskh" style="color: white; text-decoration:none;"><span>Khách hàng</span></a>
                </div>
                <div>
                    <i class="fas fa-users" style="font-size: 80px;"></i>
                </div>
            </div>
            <div class="card-single col d-flex justify-content-around bg-primary text-white py-5 ml-3">
                <div>
                    <h1 class="font-weight-bold"><?=$countbl?></h1>
                    <a href="?ctr=comment-list" style="color: white; text-decoration:none;"><span>Bình luận</span></a>
                </div>
                <div>
                    <i class="fas fa-comments" style="font-size: 80px;"></i>
                </div>
            </div>
            <div class="card-single col d-flex justify-content-around bg-success text-white py-5 ml-3">
                <div>
                    <h1 class="font-weight-bold"><?=$countod?></h1>
                    <a href="?ctr=list-order" style="color: white; text-decoration:none;"><span>Đơn hàng</span></a>
                </div>
                <div>
                    <i class="fa-solid fa-cart-shopping" style="font-size: 80px;"></i>
                </div>
            </div>
        </div>
    </div>
    <div
            id="myChart" style="width:100%; max-width:600px; height:500px;">
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Danh mục", "Số lượng sản phẩm"],
                <?php
                $tongdm=count($listthongke);
                $i=1;
                foreach($listthongke as $thongke){
                    extract($thongke);
                    if($i==$tongdm) $dauphay="";
                    else $dauphay=",";
                    echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
                    $i+=1;
                }
                ?>
            ]);

            var options = {
                title:'BIỂU ĐỒ THỐNG KÊ SẢN PHẨM TỪNG LOẠI'
            };

            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>

    <!--  -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php require_once("footer.php")?>