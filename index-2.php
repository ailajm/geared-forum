<?php
/*
    Title: PHP OOP Practice (class practice)
    Summary: Practicing with PHP OOP by building a simple site.
    Date: 2021-08-01
    Author: Coty McKinney
    Credit(s): Skeleton Demo File templated
*/

    class User{
        private $id;
        private $username;
        private $email;
        private $password;
    
        public function __construct($username, $password){
            $this->username = $username;
            $this->password = $password;
        }
    
        public function register(){
            echo '<pre>User Registered</pre>';
        }
    
        public function login(){
            $this->auth_user();
        }
    
        public function auth_user(){
            echo '<pre>' . $this->username . ' is authenticated</pre>';
        }
    
        public function __destruct(){
            echo '<pre>Destructor Called</pre>';
        }
    }
    
    $User = new User('brad', '1234');
    
    $User->register();
    
    $User->login();

    include("index.html");
?>