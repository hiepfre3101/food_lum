<?php require_once("header.php")?>
    <!-- end header -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="container">
        <div class="cards row mt-5">
            <div class="card-single col d-flex justify-content-around bg-info text-white py-5 ml-3">
                <div>
                    <p><h3 class="font-weight-bold w-75 money-js"><?=$countdt["income"]?></h3>VND</p>
                    <a href="#" style="color: white; text-decoration:none;"><span>Doanh thu</span></a>
                </div>
                <div>
                    <i class="fas fa-th-list" style="font-size:3rem;"></i>
                </div>
            </div>
            <div class="card-single col d-flex justify-content-around bg-warning text-white py-5 ml-3">
                <div>
                    <h1 class="font-weight-bold"><?=$countsp?></h1>
                    <a href="?ctr=product-list" style="color: white; text-decoration:none;"><span>Sản phẩm</span></a>
                </div>
                <div>
                    <i class="fas fa-sitemap" style="font-size: 3rem;"></i>
                </div>
            </div>
            <div class="card-single col d-flex justify-content-around bg-danger text-white py-5 ml-3">
                <div>
                    <h1 class="font-weight-bold"><?=$countkh?></h1>
                    <a href="index.php?ctr=user-list" style="color: white; text-decoration:none;"><span>Khách hàng</span></a>
                </div>
                <div>
                    <i class="fas fa-users" style="font-size: 3rem;"></i>
                </div>
            </div>
            <div class="card-single col d-flex justify-content-around bg-success text-white py-5 ml-3">
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
   <article class="w-100 row mt-5 chart-block"> 
    <div id="chartBestSeller" class="col-12 col-lg-8 p-4"></div>
    <div   class="col-12 col-lg-4 close-user">
       <table class="w-100">
            <thead>
                <tr>Họ và tên</tr>
            </thead>
       </table>
    </div>
   </article>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Sản phẩm", "Số lượng bán ra"],
                <?php 
                  foreach($arrProduct as $value){
                    echo "['".$value["product_name"]."',".$value["sales"]."],";
                  }
                ?>
            ]);

            var options = {
                title:'Biểu đồ doanh số sản phẩm bán ra'
            };

            var chart = new google.visualization.PieChart(document.getElementById('chartBestSeller'));
            chart.draw(data, options);
        }
    </script>

    <!--  -->
    <script src="./public/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php require_once("footer.php")?>