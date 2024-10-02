<?php

    define("SERVER","localhost");
    define("dataBase","fds-quiz");
    define("USER","root");
    define("PASSWORD","");

    class Connection{
        protected $con_string = "mysql:host=". SERVER . ";dbname=" . dataBase ."; charset=utf8mb4";
        protected $options = [
          \PDO::ATTR_ERRMODE =>  \PDO::ERRMODE_EXCEPTION,
          \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
          \PDO::ATTR_EMULATE_PREPARES => false  
        ];
        public function connect(){
            try{
                return new \PDO($this->con_string, USER, PASSWORD, $this->options);
            }catch (\PDOException $e){
                echo $e->getMessage();
            }
        }
    }