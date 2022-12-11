<?php 
function showAdminHome(){
    $idUser = $_SESSION["idUser"];
    $countdt=loaddt();
    $countsp=count(getAllDataProducts());
    $countbl=count(getAllDataComment());
    $countod=count( getDataOrderOption($idUser, 1));
    $countkh=count(getAllDataClient());
    $badProducts= getSellerOption("ASC");
    $bestProducts = getSellerOption("DESC");
    render("home",["countdt"=>$countdt,
                   "countsp"=>$countsp,
                   "countbl"=>$countbl,
                   "countod"=>$countod,
                   "countkh"=>$countkh,
                   "badProducts"=>$badProducts,
                   "bestProducts"=>$bestProducts,],1);
}


?>