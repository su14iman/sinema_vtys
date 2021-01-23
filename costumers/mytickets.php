<?php
include("./session.php");
    include('../assets/layouts/costumers/hedaerCostumers.php'); // head require
    include('../assets/layouts/costumers/navbarCostumers.php'); // nav require


        
    if(isset($_GET['add'])){
        
        $data = new \stdClass;
            $data->event_id = $_GET['add'];
            $data->costumer_id = $myID;

            $data->sales_person_id = 'Null';
            $data->hall_id = 'Null';
            if($salesClass->ticketsCreate($data)){
                echo "
                    <script>
                        window.location.href = 'mytickets.php';
                    </script>
                ";
            }

    }elseif(isset($_GET['del'])){
        if($_GET['del'] !== null){
            $data = new \stdClass;
            $data->id = intval($_GET['del']);
            $data->myID = $myID;
            if($salesClass->ticketsRemoveMy($data)){
                echo "
                    <script>
                        window.location.href = 'mytickets.php';
                    </script>
                "; 
            }
        }
    }else{
        $data = $salesClass->ticketsFindMy($myID);
        include("../assets/pages/costumers/my.php"); // content require
    }
    







    include('../assets/layouts/costumers/footerCostumers.php'); // footer require

?>

