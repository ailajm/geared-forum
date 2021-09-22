<?php
/*
    Title: GEARED
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: Boards model
    Date: 2021-08-23
    Author: Coty McKinney
*/

    class BoardModel extends Model{
        public function Index() {
            $this->query('SELECT * FROM boards');
            $rows = $this->resultSet();
            return $rows;
        }
    }

?>