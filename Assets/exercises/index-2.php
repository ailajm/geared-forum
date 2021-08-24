<?php
/*
    Title: PHP OOP Practice
    Description: Practicing with PHP OOP by building a simple site.
    File Summary: Classes, Methods, Properties, Visibility
    Date: 2021-08-01
    Author: Coty McKinney
*/

    include("./index.html");

    // Declare User class
    class User{
        // Properties
        private $id;
        private $username;
        private $email;
        private $password;
        
        // Methods
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

?>