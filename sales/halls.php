<?php
include("./session.php");
    include('../assets/layouts/hedaerSales.php'); // head require
    include('../assets/layouts/navbarSales.php'); // nav require

    $pageName = "halls";

        
    if(isset($_GET['add'])){
        include("../assets/pages/salse/".$pageName.".add.php"); // content require
        if(isset($_POST['submit'])){
            $data = new \stdClass;
            $data->hall_capasity = intval($_POST['hall_capasity']);
            if($salesClass->hallsCreate($data)){
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
            if($salesClass->hallsRemove($data)){
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
        $data = $salesClass->hallsFind();
        include("../assets/pages/salse/".$pageName.".php"); // content require
    }
    







    include('../assets/layouts/footerSales.php'); // footer require

?>

