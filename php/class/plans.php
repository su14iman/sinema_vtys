<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;

    class plans extends config{
        private $tableName = "plans";
        private $tableID = "plan_id";
        
        private $fields = array(
            0=>"from_date",
            1=>"to_date",
        );


        public function find($query = null){ 
            return $this->sqli->query("SELECT * FROM `".$this->tableName."`".$query);
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
                (
                    `".$this->fields[0]."`,
                    `".$this->fields[1]."`
                ) 
                VALUES 
                (
                    '".$this->sIO($arg->from_date)."',
                    '".$this->sIO($arg->to_date)."'
                );   
            ");
        }
        public function update($arg){ 
            return $this->sqli()->query("
                UPDATE `".$this->tableName."` 
                SET 
                    `".$this->fields[0]."` = '".$this->sIO($arg->from_date)."',
                    `".$this->fields[1]."` = '".$this->sIO($arg->to_date)."'
                WHERE `".$this->tableID."` = ".intval($arg->id).";  
            ");   
        }

        
        
        
    }
    

?>