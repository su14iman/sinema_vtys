<?php
include("./session.php");
    include('../assets/layouts/hedaerSales.php'); // head require
    include('../assets/layouts/navbarSales.php'); // nav require

    $pageName = "genres";

        
    if(isset($_GET['add'])){
        include("../assets/pages/salse/".$pageName.".add.php"); // content require
        if(isset($_POST['submit'])){
            $data = new \stdClass;
            $data->genre_name = $_POST['genre_name'];
            // var_dump($data);
            if($salesClass->genresCreate($data)){
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
            if($salesClass->genresRemove($data)){
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
        $data = $salesClass->genresFind();
        include("../assets/pages/salse/".$pageName.".php"); // content require
    }
    







    include('../assets/layouts/footerSales.php'); // footer require

?>

