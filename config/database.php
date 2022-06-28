<?php 
    class Database {
        public $conn;

        public $host="localhost";//
        public $pg_port="5432";//
        public $pg_user="postgres";//
        public $pg_pw="1234";//
        public $pg_db="ubon1";//
        public function getConnection(){
            $this->conn = null;
            // try{
                $this->conn = pg_connect("host=".$this->host." port=".$this->pg_port." dbname=".$this->pg_db." user=".$this->pg_user." password=".$this->pg_pw);
                // $this->conn->exec("set names utf8");
            // }catch(PDOException $exception){
            //     echo "Database could not be connected: " . $exception->getMessage();
            // }
            return $this->conn;

            
        }
    }  
?>