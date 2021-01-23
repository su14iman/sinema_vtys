<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;

    class seats extends config{
        private $tableName = "seats";
        private $tableID = "seat_id";
        
        private $fields = array(
            0=>"ticket_id",
            1=>"hall_id",
            2=>"event_id",
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
                (`
                    `".$this->fields[0]."`,
                    `".$this->fields[1]."`,
                    `".$this->fields[2]."`
                `) 
                VALUES 
                ('
                    ".intval($arg->ticket_id).",
                    ".intval($arg->hall_id).",
                    ".intval($arg->event_id)."
                ');   
            ");
        }
        public function update($arg){ 
            return $this->sqli()->query("
                UPDATE `".$this->tableName."` 
                SET 
                    `".$this->fields[0]."` = ".intval($arg->ticket_id).",
                    `".$this->fields[1]."` = ".intval($arg->hall_id).",
                    `".$this->fields[2]."` = ".intval($arg->event_id)."
                WHERE `".$this->tableID."` = ".intval($arg->id).";  
            ");   
        }

        
        
        
    }
    

?>