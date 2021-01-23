<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;

    class costumers extends config{
        private $tableName = "costumers";
        private $tableID = "costumer_id";
        
        private $fields = array(
            0=>"costumer_name",
            1=>"costumer_surname",
            2=>"costumer_phone",
            3=>"costumer_email",
            4=>"costumer_password",
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
                    ".$this->sIO($arg->costumer_name).",
                    ".$this->sIO($arg->costumer_surname).",
                    ".intval($arg->costumer_phone).",
                    ".$this->sIO($arg->costumer_email).",
                    ".$this->sIO(md5($arg->costumer_password))."
                ');   
            ");
        }
        public function update($arg){ 
            return $this->sqli()->query("
                UPDATE `".$this->tableName."` 
                SET 
                    `".$this->fields[0]."` = '".$this->sIO($arg->costumer_name)."',
                    `".$this->fields[1]."` = '".$this->sIO($arg->costumer_surname)."',
                    `".$this->fields[2]."` = '".intval($arg->costumer_phone)."',
                    `".$this->fields[3]."` = '".$this->sIO($arg->costumer_email)."',
                    `".$this->fields[4]."` = '".$this->sIO(md5($arg->costumer_password))."'
                WHERE `".$this->tableID."` = ".intval($arg->id).";  
            ");   
        }

        public function login($arg){
            $query =  $this->sqli()->query("
            SELECT * FROM `".$this->tableName."` 
            WHERE 
                `".$this->fields[3]."` = '".$this->sIO($arg->costumer_email)."'
                AND
                `".$this->fields[4]."` = '".$this->sIO(md5($arg->costumer_password))."'
            ");
            return ($query->numRows() > 0) ? $query->fetchArray()['costumer_id'] : false;
        }

        
        
        
    }
    

?>