<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;

    class tickets extends config{
        private $tableName = "tickets";
        private $tableID = "ticket_id";
        
        private $fields = array(
            0=>"movie_id",
            1=>"costumer_id",
            2=>"sales_person_id",
            3=>"hall_id",
            4=>"ticket_time",
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
                    ".$this->fields[0].",
                    ".$this->fields[1].",
                    ".$this->fields[2].",
                    ".$this->fields[3].",
                    ".$this->fields[4]."
                `) 
                VALUES 
                ('
                    ".intval($arg->movie_id).",
                    ".intval($arg->costumer_id).",
                    ".intval($arg->sales_person_id).",
                    ".intval($arg->hall_id).",
                    ".$this->sIO($arg->ticket_time)."
                ');   
            ");
        }
        public function update($arg){ 
            return $this->sqli()->query("
                UPDATE `".$this->tableName."` 
                SET 
                    `".$this->fields[0]."` = '".intval($arg->movie_id)."',
                    `".$this->fields[1]."` = '".intval($arg->costumer_id)."',
                    `".$this->fields[2]."` = '".intval($arg->sales_person_id)."',
                    `".$this->fields[3]."` = '".intval($arg->hall_id)."',
                    `".$this->fields[4]."` = '".$this->sIO($arg->ticket_time)."'
                WHERE `".$this->tableID."` = ".intval($arg->id).";  
            ");   
        }

        
        
        
    }
    

?>