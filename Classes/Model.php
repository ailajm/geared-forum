<?php
/*
    Title: Shareboard 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: Model class
    Date: 2021-08-23
    Author: Coty McKinney
*/
    abstract class Model {
        protected $dbh;
        protected $stmnt;
        
        public function __construct() {
            $this->dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        }

        public function query($query) {
            $this->stmnt = $this->dbh->prepare($query);
        }

        public function bind($param, $value, $type=null) {
            if(is_null($type)) {
                switch (true) {
                    case is_int($value):
                        $type=PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }
            $this->stmnt->bindValue($param, $value, $type);          
        }

        public function execute() {
            $this->stmnt->execute();
        }

        public function resultSet() {
            $this->execute();
            return $this->stmnt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>