<?php
/*
    Title: PHP OOP Practice
    Description: Practicing with PHP OOP by building a simple site.
    File Summary: Static properties & methods
    Date: 2021-08-08
    Author: Coty McKinney
*/

    class User{
        public $username;

        public static $minPassLength = 5;

        public static function validatePassword($password) {
            if(strlen($password) >= self::$minPassLength) {
                return true;
            }else {
                return false;
            }
        }
    }

    /*
    $password = "password";

    if(User::validatePassword($password)) {
        echo "Password is valid!";
    }else {
        echo "Password is not valid!";
    }
    */

    // echo User::$minPassLength;

?>