<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;

    class halls extends config{
        private $tableName = "halls";
        private $tableID = "hall_id";
        
        private $fields = array(
            0=>"hall_capasity",
        );


        public function find(){ 
            return $this->sqli->query("SELECT * FROM `".$this->tableName."`");
        }
        public function get($arg){
            return $this->sqli()->query("
            SELECT * FROM `".$this->tableName."` 
            WHERE `".$this->tableID."` = ".intval($arg->id).";")->fetchArray();
        }
        public function remove($arg){ 
            return $this->sqli()->query("
                DELETE FROM `".$this->tableName."` 
                WHERE `".$this->tableID."` = ".intval($arg->id).";
            ");  
        }
        public function create($arg){ 
            return $this->sqli->query("
                INSERT INTO `".$this->tableName."` 
                (`".$this->fields[0]."`) 
                VALUES 
                ('".intval($arg->hall_capasity)."');   
            ");
        }
        public function update($arg){ 
            return $this->sqli()->query("
                UPDATE `".$this->tableName."` 
                SET 
                `".$this->fields[0]."` = '".intval($arg->hall_capasity)."' 
                WHERE `".$this->tableID."` = ".intval($arg->id).";  
            ");   
        }

        
        
        
    }
    

?>