<?php
/*
    Title: Shareboard 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: PHP index file
    Date: 2021-08-23
    Author: Coty McKinney
*/

    require('config.php');
    
    // Include Classes
    require('Classes/Bootstrap.php');
    require('Classes/Controller.php');
    require('Classes/Model.php');
    
    // Include Controllers
    require('Controllers/home.php');
    require('Controllers/shares.php');
    require('Controllers/users.php');
    
    // Include Models
    require('Models/home.php');
    require('Models/share.php');
    require('Models/user.php');

    $bootstrap = new Bootstrap($_GET);
    $controller = $bootstrap->createController();
    
    if($controller) {
        $controller->executeAction();
    }

?>