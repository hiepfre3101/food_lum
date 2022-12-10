<?php 
function showAdminHome(){
    $idUser = $_SESSION["idUser"];
    $countdt=loaddt();
    $countsp=count(getAllDataProducts());
    $countbl=count(getAllDataComment());
    $countod=count( getDataOrderOption($idUser, 1));
    $countkh=count(getAllDataClient());
    $arrProduct = getSalesProduct();
    render("home",["countdt"=>$countdt,
                   "countsp"=>$countsp,
                   "countbl"=>$countbl,
                   "countod"=>$countod,
                   "countkh"=>$countkh,
                   "arrProduct"=>$arrProduct],1);
}


?>