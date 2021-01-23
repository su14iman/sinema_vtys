<?php
include("./session.php");
    include('../assets/layouts/hedaerSales.php'); // head require
    include('../assets/layouts/navbarSales.php'); // nav require

    $pageName = "events";

        
    if(isset($_GET['add'])){
        $dataPlans = $salesClass->plansFind();
        $dataMovies = $salesClass->movieFind();
        include("../assets/pages/salse/".$pageName.".add.php"); // content require
        if(isset($_POST['submit'])){
            $data = new \stdClass;
            $data->plan_id = intval($_POST['plan_id']);
            $data->movie_id = intval($_POST['movie_id']);
            if($salesClass->eventsCreate($data)){
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
            if($salesClass->eventsRemove($data)){
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
        $data = $salesClass->eventsFind();
        include("../assets/pages/salse/".$pageName.".php"); // content require
    }
    







    include('../assets/layouts/footerSales.php'); // footer require

?>

