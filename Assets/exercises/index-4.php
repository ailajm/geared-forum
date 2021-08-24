<?php
/*
    Title: PHP OOP Practice
    Description: Practicing with PHP OOP by building a simple site.
    File Summary: Class inheritance
    Date: 2021-08-04
    Author: Coty McKinney
*/

    class First {
        public $id = 23;
        protected $name = "John Doe";

        public function saySomething($word) {
            echo $word;
        }
    }

    class Second extends First {
        public function getName() {
            echo $this->name;
        }
    }

    $second = new Second;

    echo $second->getName();
    
    //echo $second->saySomething("Hello World!");





?>