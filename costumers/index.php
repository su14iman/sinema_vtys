<?php
session_start();
if (!isset($_SESSION['costumer_id'])) {
    echo "u musst signin in frist !!";
    header('Location: ./signin.php');
    exit();
}else{
    header('Location: ./main.php');
    exit();
}
    


?>