<?php 
include("../php/db.php");
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
//  global $sqli;
class config
{
    private $db_host = "localhost";
    private $db_username = "root";
    private $db_password = "1231233";
    private $db_table = "sinema_vtys";
    

    function __construct() {
        return $this->sqli();
    }

    public function sqli(){
        $this->sqli = new db(
            $this->db_host, 
            $this->db_username, 
            $this->db_password, 
            $this->db_table
        );
        if(mysqli_connect_error()){ 
            return mysqli_connect_error(); 
        }else{
            return $this->sqli;
        }
    }

    public function sIO($ss){ 
        return addslashes(htmlspecialchars(trim($ss))); 
    }
}

?>