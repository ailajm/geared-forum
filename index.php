<?php
/*
    Title: GEARED 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: PHP index file
    Date: 2021-08-23
    Author: Coty McKinney
*/
    // Include DB & Routing Configuration
    require('config.php');
    
    // Include Classes
    require('Classes/Bootstrap.php');
    require('Classes/Controller.php');
    require('Classes/Model.php');
    
    // Include Controllers
    require('Controllers/home.php');
    require('Controllers/boards.php');
    require('Controllers/users.php');
    require('Controllers/about.php');
    
    // Include Models
    require('Models/home.php');
    require('Models/board.php');
    require('Models/user.php');
    require('Models/about.php');

    $bootstrap = new Bootstrap($_GET);
    $controller = $bootstrap->createController();
    
    if($controller) {
        $controller->executeAction();
    }

?>