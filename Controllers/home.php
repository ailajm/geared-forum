<?php
/*
    Title: GEARED 
    Description: Mock-up musical equipment discussion board.
    File Summary: Home controller
    Date: 2021-08-23
    Author: Coty McKinney
*/

    class Home extends Controller {
        protected function Index() {
            $viewModel = new HomeModel();
            $this->returnView($viewModel->Index(), true);
        }
    }


?>