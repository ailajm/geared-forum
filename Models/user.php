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
            return;
            // if(password_verify($password, $hashed_password)) {
            // If the password inputs matched the hashed password in the database
            // Do something, you know... log them in.} 
            // Else, Redirect them back to the login page
        }

        public function Register() {
            // Sanitize POST
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            if($post['submit']){
                // die('SUBMITTED!');
                // Insert into MySQL
                $this->query('INSERT INTO users (username, email, password) VALUES(:username, :email, :password)');
                $this->bind(':username', $post['username']);
                $this->bind(':email', $post['email']);
                $this->bind(':password', password_hash($post['password'], PASSWORD_DEFAULT));
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