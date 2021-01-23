<?php
include("./session.php");
    include('../assets/layouts/costumers/hedaerCostumers.php'); // head require
    include('../assets/layouts/costumers/navbarCostumers.php'); // nav require

    $pageName = "explorer";

        
    if(isset($_GET['show'])){
        $data = new \stdClass;
        $data->id = $_GET['show'];
        $dataMovie = $salesClass->eventsGet($data);
        include("../assets/pages/costumers/details.php"); // content require
        

    }else{
        $dataEvents = $salesClass->eventsFind();
        include("../assets/pages/costumers/explorer.php"); // content require
    }
    







    include('../assets/layouts/costumers/footerCostumers.php'); // footer require

?>

