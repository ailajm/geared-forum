<?php
/*
    Title: PHP OOP Practice (class practice)
    Summary: Practicing with PHP OOP by building a simple site.
    Date: 2021-08-01
    Author: Coty McKinney
    Credit: Skeleton Demo File templated
*/
    include("index.html");
    class User{
        public function register(){
            echo '<script>alert("User registered!")</script>';
        }
        public function login($username, $password) {
            //echo '<script>alert("$username . ' is now logged in!'")</script>';
        }
    }
    $User = new User;
    $User->register();
    $User->login('Brad', '1234');
?>