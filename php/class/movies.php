<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;

    class movies extends config{
        private $tableName = "movies";
        private $tableID = "movie_id";
        
        private $fields = array(
            0=>"genre_id",
            1=>"movie_name",
            2=>"movie_director",
            3=>"movie_date",
            4=>"movie_language",
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
                    `".$this->fields[1]."`,
                    `".$this->fields[2]."`,
                    `".$this->fields[3]."`,
                    `".$this->fields[4]."`
                ) 
                VALUES 
                (
                    ".intval($arg->genre_id).",
                    '".$this->sIO($arg->movie_name)."',
                    '".$this->sIO($arg->movie_director)."',
                    '".$this->sIO($arg->movie_date)."',
                    '".$this->sIO($arg->movie_language)."'
                );   
            ");
        }
        public function update($arg){ 
            return $this->sqli()->query("
                UPDATE `".$this->tableName."` 
                SET 
                    `".$this->fields[0]."` = ".intval($arg->genre_id).",
                    `".$this->fields[1]."` = '".$this->sIO($arg->movie_name)."',
                    `".$this->fields[2]."` = '".$this->sIO($arg->movie_director)."',
                    `".$this->fields[3]."` = '".$this->sIO($arg->movie_date)."',
                    `".$this->fields[4]."` = '".$this->sIO($arg->movie_language)."'
                WHERE `".$this->tableID."` = ".intval($arg->id).";  
            ");   
        }

        
        
        
    }
    

?>