<?php
/*
    Title: GEARED 
    Description: Mock-up musical equipment discussion board.
    File Summary: Main view file
    Date: 2021-08-26
    Author: Coty McKinney
*/

// build page
    require("partials/header.php");
    require("partials/nav.php");
    ErrorSuccessMessaging::display();
    require($view);
    require("partials/footer.php");

?>