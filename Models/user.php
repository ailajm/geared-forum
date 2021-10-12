<?php
/*
    Title: GEARED 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: Users model
    Date: 2021-08-23
    Author: Coty McKinney
*/

    class UserModel extends Model{
        public function Index() {
            return;
        }

        public function Login() {
            // Sanitize POST
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            $password = md5($post['password']);
    
            if($post['submit']){
                // Compare Login
                $this->query('SELECT * FROM users WHERE username = :username AND password = :password');
                $this->bind(':username', $post['username']);
                $this->bind(':password', $password);
                
                $row = $this->userRec();
    
                if($row){
                    $_SESSION['is_logged_in'] = true;
                    $_SESSION['user_data'] = [
                        'id' => $row['id'],
                        'username' => $row['username'],
                        'email' => $row['email'],
                    ];

                    header('Location: '.ROOT_URL.'users/');
                } else {
                    echo 'Incorrect Login';
                }
            }
            return;
        }

        public function Register() {
            // Sanitize POST
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            $password = md5($post['password']);
    
            if($post['submit']){
                // Insert into MySQL
                $this->query('INSERT INTO users (username, email, password) VALUES(:username, :email, :password)');
                $this->bind(':username', $post['username']);
                $this->bind(':email', $post['email']);
                $this->bind(':password', $password);
                $this->execute();
                // Verify
                if($this->lastInsertId()){
                    // Redirect
                    header('Location: '.ROOT_URL.'users/login');
                }
            }
            return;
        }
    }

?>