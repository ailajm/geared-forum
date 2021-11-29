<?php
/*
    Title: GEARED
    Description: Mock-up musical equipment discussion board.
    File Summary: Boards model
    Date: 2021-08-23
    Author: Coty McKinney
*/

    class BoardModel extends Model{
        private $catTable = 'board_category';
	    private $topicTable = 'board_topics';
	    private $postTable = 'board_posts';

        public function getCatList(){		
            $this->query('SELECT * FROM '.$this->catTable.' ORDER BY cat_id DESC');
			$catList = $this->resultSet();
            return $catList;	
        }

        public function Index() {
            $this->query('SELECT * FROM '.$this->catTable.' ORDER BY create_date DESC');
            $rows = $this->resultSet();
            return $rows;
        }
        
        public function Board() {
            return;
        }

        public function add(){
            // Sanitize POST
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            if(isset($post['submit'])){
                if($post['title'] == '' || $post['description'] == '') {
                    ErrorSuccessMessaging::setMsg('Please fill out entire form.', 'error');
                    return;
                }
                // Insert into MySQL
                $this->query('INSERT INTO '.$this->catTable.' (title, description, u_id) VALUES(:title, :description, :u_id)');
                $this->bind(':title', $post['title']);
                $this->bind(':description', $post['description']);
                $this->bind(':u_id', 1);
                $this->execute();
                // Verify
                if($this->lastInsertId()){
                    // Redirect
                    header('Location: '.ROOT_URL.'boards');
                }
            }
            return;
        }

        public function getCategory(){
            if($this->cat_id) {
                $this->query('SELECT title FROM '.$this->catTable.' WHERE cat_id='.$this->cat_id.'');
                $cat = $this->resultSet();
                return $cat;
            }
        }

// Counts functions
        // public function getCategoryTopicsCount(){
        //     if($this->cat_id) {
        //     }
        // }

        // public function getCategorypostsCount(){
        //     if($this->cat_id) {
        //     }
        // }
    }

?>