<?php
/*
    Title: PHP OOP Practice (class practice)
    Summary: Practicing with PHP OOP by building a simple site.
    Date: 2021-08-01
    Author: Coty McKinney
    Credit(s): Skeleton Demo File templated
*/
    include("index.html");
    class User{
        public $id;
        public $username; 
        public $email;
        public $password;
        public function __construct() {
            echo "<script>alert('Constructor called!')</script>";
        }
        public function register($username){
            echo "<script>alert(`$username registered!`)</script>";
        }
        public function login($username, $password) {
            $this->auth_user($username,$password);
        }
        public function auth_user($username,$password) {
            echo "<script>alert(`$username is authenticated!`)</script>";
        }
        public function __destruct(){
            echo "<script>alert('Destructor called!')</script>";
            // Used for closing database connections/"wrap-up tasks"
        }
    }
    $User = new User;
    $User->register('Brad');
    $User->login('Brad', '1234');
?>