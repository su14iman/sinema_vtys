<?php
session_start();
if (!isset($_SESSION['sales_person_id'])) {
    echo "u musst signin in frist !!";
    header('Location: ./signin.php');
    exit();
}else{
    header('Location: ./tickets.php');
    exit();
}
    


?>