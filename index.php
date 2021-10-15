<?php
/*
    Title: GEARED 
    Description: Mock-up musical equipment discussion board.
    File Summary: PHP index file
    Date: 2021-08-23
    Author: Coty McKinney
*/

// start session
    session_start();
// include database & routing config
    require('config.php');    
// include classes
    require('Classes/Bootstrap.php');
    require('Classes/Controller.php');
    require('Classes/Model.php');
    require('Classes/ErrorSuccessMessaging.php');    
// include controllers
    require('Controllers/home.php');
    require('Controllers/boards.php');
    require('Controllers/users.php');
    require('Controllers/about.php');    
// include models
    require('Models/home.php');
    require('Models/board.php');
    require('Models/user.php');
    require('Models/about.php');
// create bootstrap instance and controller
    $bootstrap = new Bootstrap($_GET);
    $controller = $bootstrap->createController();
// check for controller    
    if($controller) {
        $controller->executeAction();
    }

?>