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

        public function add(){
            // Sanitize POST
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            if($post['submit']){
                // Insert into MySQL
                $this->query('INSERT INTO boards (title, description, link, user_id) VALUES(:title, :description, :link, :user_id)');
                $this->bind(':title', $post['title']);
                $this->bind(':description', $post['description']);
                $this->bind(':link', $post['link']);
                $this->bind(':user_id', 1);
                $this->execute();
                // Verify
                if($this->lastInsertId()){
                    // Redirect
                    header('Location: '.ROOT_URL.'boards');
                }
            }
            return;
        }
    }

?>