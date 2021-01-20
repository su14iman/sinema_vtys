<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;
header('Content-Type: application/json');


    include("./config.php");
    include("./class/autoload.php");


    $genres = new genres();
    $data = new \stdClass();
    $data->id = 4;
    $data->name = "test new";
    // $genres->find()->fetchAll(function($account) {
    //     echo $account['genre_name']."\n";
    // });
    // echo $genres->create($data);

    echo $genres->get($data)['genre_name'];
    
    
        // $a = "2021-01-11 02:00:12";
        // echo addslashes(htmlspecialchars(trim($a))); 


?>