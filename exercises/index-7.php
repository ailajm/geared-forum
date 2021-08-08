<?php
/*
    Title: PHP OOP Practice
    Description: Practicing with PHP OOP by building a simple site.
    File Summary: Autoloading classes & final keyword
    Date: 2021-08-08
    Author: Coty McKinney
*/

    //include("foo.php");
    //include("bar.php");

    spl_autoload_register(function($class_name) {
        include $class_name . ".php";
    });

    $foo = new Foo;
    $bar = new Bar;

    $bar->sayHello();

?>