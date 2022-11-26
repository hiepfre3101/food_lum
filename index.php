<?php
   // required model here ...
  require_once ("./model/config.php");
  require_once ("./model/database.php");
  require_once ("./model/product-m.php");



   // require controller here...
  require_once("./controller/render-ctr.php");
  require_once("./controller/client-ctr.php");

   //@param : $ctr viết tắt controller, đây là biến để truyền lên thanh url có thể đặt tên tùy thích 
   // nhưng để ctr nhằm thể hiện là đang gọi ctr nào.
   $ctr = isset($_GET["ctr"]) ?  $_GET['ctr'] : '/';

   switch($ctr){
    case "/":
    case "home": 
        showClientHome();
       break;
    }