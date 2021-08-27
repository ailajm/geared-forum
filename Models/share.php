<?php
/*
    Title: Shareboard 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: Shares model
    Date: 2021-08-23
    Author: Coty McKinney
*/

    class ShareModel extends Model{
        public function Index() {
            $this->query('SELECT * FROM shares');
            $rows = $this->resultSet();
            for($i = 0; $i<count($rows); $i++) {
                $row = json_encode($rows[$i]);
                echo "<li>$row</li>";
            }
        }
    }

?>