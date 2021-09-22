<?php
/*
    Title: GEARED 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: Home controller
    Date: 2021-08-23
    Author: Coty McKinney
*/

    class Home extends Controller {
        protected function Index() {
            $viewModel = new HomeModel();
            $this->ReturnView($viewModel->Index(), true);
        }
    }


?>