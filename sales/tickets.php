<?php
include("./session.php");
    include('../assets/layouts/hedaerSales.php'); // head require
    include('../assets/layouts/navbarSales.php'); // nav require

    $pageName = "tickets";

        
    if(isset($_GET['add'])){
        $dataEvent = $salesClass->eventsFind();
        $dataCostumer = $salesClass->costumersFind();
        $dataHalls = $salesClass->hallsFind();
        include("../assets/pages/salse/".$pageName.".add.php"); // content require
        if(isset($_POST['submit'])){
            $data = new \stdClass;
            $data->event_id = intval($_POST['event_id']);
            $data->costumer_id = ($_POST['costumer_id'] == 0)? 'NULL':$_POST['costumer_id'];
            $data->sales_person_id = $myID;
            $data->hall_id = intval($_POST['hall_id']);
            if($salesClass->ticketsCreate($data)){
                echo "
                    <script>
                        window.location.href = '".$pageName.".php';
                    </script>
                ";
            }
        }

    }elseif(isset($_GET['del'])){
        if($_GET['del'] !== null){
            $data = new \stdClass;
            $data->id = intval($_GET['del']);
            if($salesClass->ticketsRemove($data)){
                echo "
                    <script>
                        window.location.href = '".$pageName.".php';
                    </script>
                "; 
            }
        }else{
            echo "
                <script>
                    window.location.href = '".$pageName.".php';
                </script>
            "; 
        }
    }else{
        
        $data = $salesClass->ticketsFind();
        include("../assets/pages/salse/".$pageName.".php"); // content require
    }
    







    include('../assets/layouts/footerSales.php'); // footer require

?>

