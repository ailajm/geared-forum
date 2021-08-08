<?php
/*
    Title: PHP OOP Practice
    Description: Practicing with PHP OOP by building a simple site.
    File Summary: Abstract classes & methods
    Date: 2021-08-08
    Author: Coty McKinney
*/

    abstract class Animal {
        public $name;
        public $color;

        public function describe() {
            return $this->name . " is " . $this->color;
        }

        abstract public function makeSound();
    }

    class Duck extends Animal {
        public function describe() {
            return parent::describe();
        }

        public function makeSound() {
            return "\n Quack! \n";
        }
    }

    class Dog extends Animal {
        public function describe() {
            return parent::describe();
        }

        public function makeSound() {
            return "\n Bark! \n";
        }
    }

    $duck = new Duck();
    $duck->name = "Ben";
    $duck->color = "Yellow";
    echo $duck->describe();
    echo $duck->makeSound();

?>