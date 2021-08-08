<?php
/*
    Title: PHP OOP Practice
    Description: Practicing with PHP OOP by building a simple site.
    File Summary: Object iteration
    Date: 2021-08-08
    Author: Coty McKinney
*/

    class People {
        public $person1 = "Mike";
        public $person2 = "Shelly";
        public $person3 = "Geoff";

        protected $person4 = "John";

        private $person5 = "Jenn";

        /*
        function iterateObject() {
            foreach($this as $key => $value) {
                print "$key => $value \n";
            }
        }
        */


    }

    $people = new People;
    //$people->iterateObject();

    foreach($people as $key => $value) {
        print "$key => $value \n";
    } 
?>