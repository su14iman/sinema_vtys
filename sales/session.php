<?php
session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;

include("../php/config.php");
include("../php/salesClass.php");

    $salesClass = new salesClass();
    $myID = $_SESSION['sales_person_id'];
    
    if (!isset($_SESSION['sales_person_id'])) {
        echo "u musst signin in frist !!";
		header('Location: signin.php');
		exit();
    }
    

    
?>