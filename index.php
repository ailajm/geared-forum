<?php

// Basic PHP OOP Syntax ↓
//    Class User{
//        public $someProperty;  //  Properties can be: Public, Private, or Protected.
            // Public - accessible outside of the class
            // Private - accessible ONLY in owner class
            // Protected - accessible in class and any extended classes
                // Can be attached to both properties and methods
//        public function someFunction(){
            // Do Something
//        }
//    }
// Basic PHP OOP Syntax ↑

// Classes can be extended to a child class
    // Child classes have access to all of its parents properties and methods
    // UNLESS the visibility/scope is set to 'private'
    //Example:
        // Class ChildClass extends ParentClass{}


// To create an instance/instantiate a class 
    // $user = new User;
// Print a property of a class variable
    /* <?php echo $user->firstName; ?>*/
// Call a method/function of a class variable
    /* <?php $user->register(); ?>*/

// Abstract classes must be extended by another class and CANNOT
// be instantiated/used directly
// IF a property, or method is 'abstract' then the classs also MUST be 'abstract'
// Example:
    // class SomeClass{
    //    abstract public function someFunction(){
    //    
    //    }
    //}














?>