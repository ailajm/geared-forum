<?php
/*
    Title: GEARED 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: Main view file
    Date: 2021-08-26
    Author: Coty McKinney
*/

    require("partials/header.php");
    require("partials/nav.php");
    ErrorSuccessMessaging::display();
    require($view);
    require("partials/footer.php");

?>