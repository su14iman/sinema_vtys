<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;

    class sales extends config{
        private $tableName = "sales_persons";
        private $tableID = "sales_person_id";
        
        private $fields = array(
            0=>"sales_person_name",
            1=>"sales_person_surname",
            2=>"sales_person_phone",
            3=>"sales_person_email",
            4=>"sales_person_password",
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
                    ".$this->sIO($arg->sales_person_name).",
                    ".$this->sIO($arg->sales_person_surname).",
                    ".intval($arg->sales_person_phone).",
                    ".$this->sIO($arg->sales_person_email).",
                    ".$this->sIO(md5($arg->sales_person_password))."
                ');   
            ");
        }
        public function update($arg){ 
            return $this->sqli()->query("
                UPDATE `".$this->tableName."` 
                SET 
                    `".$this->fields[0]."` = '".$this->sIO($arg->sales_person_name)."',
                    `".$this->fields[1]."` = '".$this->sIO($arg->sales_person_surname)."',
                    `".$this->fields[2]."` = '".intval($arg->sales_person_phone)."',
                    `".$this->fields[3]."` = '".$this->sIO($arg->sales_person_email)."',
                    `".$this->fields[4]."` = '".$this->sIO(md5($arg->sales_person_password))."'
                WHERE `".$this->tableID."` = ".intval($arg->id).";  
            ");   
        }
        public function updatePassword($arg){ 
            return $this->sqli()->query("
                UPDATE `".$this->tableName."` 
                SET 
                    `".$this->fields[4]."` = '".$this->sIO(md5($arg->sales_person_password))."'
                WHERE `".$this->tableID."` = ".intval($arg->id).";  
            ");   
        }

        public function login($arg){
            $query =  $this->sqli()->query("
            SELECT * FROM `".$this->tableName."` 
            WHERE 
                `".$this->fields[3]."` = '".$this->sIO($arg->sales_person_email)."'
                AND
                `".$this->fields[4]."` = '".$this->sIO(md5($arg->sales_person_password))."'
            ");
            return ($query->numRows() > 0) ? $query->fetchArray()['sales_person_id'] : false;
        }

        
        
        
    }
    

?>