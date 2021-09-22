<?php
/*
    Title: GEARED 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: About controller
    Date: 2021-09-18
    Author: Coty McKinney
*/

    class About extends Controller {
        protected function Index() {
            $viewModel = new AboutModel();
            $this->ReturnView($viewModel->Index(), true);
        }
    }


?>