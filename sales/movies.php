<?php
include("./session.php");
    include('../assets/layouts/hedaerSales.php'); // head require
    include('../assets/layouts/navbarSales.php'); // nav require

    $pageName = "movies";

        
    if(isset($_GET['add'])){
        $dataGenre = $salesClass->genresFind();
        include("../assets/pages/salse/".$pageName.".add.php"); // content require
        if(isset($_POST['submit'])){
            $data = new \stdClass;
            $data->genre_id = $_POST['genre_id'];
            $data->movie_name = $_POST['movie_name'];
            $data->movie_director = $_POST['movie_director'];
            $data->movie_date = $_POST['movie_date'];
            $data->movie_language = $_POST['movie_language'];
            if($salesClass->movieCreate($data)){
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
            if($salesClass->movieRemove($data)){
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
        $data = $salesClass->movieFind();
        include("../assets/pages/salse/".$pageName.".php"); // content require
    }
    







    include('../assets/layouts/footerSales.php'); // footer require

?>

