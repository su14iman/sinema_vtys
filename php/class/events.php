<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;

    class events extends config{
        private $tableName = "events";
        private $tableID = "event_id";
        
        private $fields = array(
            0=>"plan_id",
            1=>"movie_id",
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
                (`
                    ".$this->fields[0].",
                    ".$this->fields[1]."
                `) 
                VALUES 
                ('
                    ".intval($arg->plan_id).",
                    ".intval($arg->movie_id)."
                ');   
            ");
        }
        public function update($arg){ 
            return $this->sqli()->query("
                UPDATE `".$this->tableName."` 
                SET 
                    `".$this->fields[0]."` = '".intval($arg->plan_id)."',
                    `".$this->fields[1]."` = '".intval($arg->movie_id)."'
                WHERE `".$this->tableID."` = ".intval($arg->id).";  
            ");   
        }

        
        
        
    }
    

?>