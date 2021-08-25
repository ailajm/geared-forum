<?php
/*
    Title: Shareboard 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: Shares controller
    Date: 2021-08-23
    Author: Coty McKinney
*/

    class Shares extends Controller {
        protected function Index() {
            $viewModel = new ShareModel();
            $this->ReturnView($viewModel->Index(), true);
        }
    }


?>