<?php
include("./session.php");
    include('../assets/layouts/hedaerSales.php'); // head require
    include('../assets/layouts/navbarSales.php'); // nav require

        
    if(isset($_GET['add'])){
        include("../assets/pages/salse/plans.add.php"); // content require
        if(isset($_POST['submit'])){
            $data = new \stdClass;
            $data->from_date = $_POST['form-date'];
            $data->to_date = $_POST['to-date'];
            if($salesClass->plansCreate($data)){
                echo "
                    <script>
                        window.location.href = 'plans.php';
                    </script>
                ";
            }
        }

    }elseif(isset($_GET['del'])){
        if($_GET['del'] !== null){
            $data = new \stdClass;
            $data->id = intval($_GET['del']);
            if($salesClass->plansRemove($data)){
                echo "
                    <script>
                        window.location.href = 'plans.php';
                    </script>
                "; 
            }
        }else{
            echo "
                <script>
                    window.location.href = 'plans.php';
                </script>
            "; 
        }
    }else{
        $data = $salesClass->plansFind();
        include("../assets/pages/salse/plans.php"); // content require
    }
    







    include('../assets/layouts/footerSales.php'); // footer require

?>

