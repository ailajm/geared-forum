<?php
/*
    Title: GEARED 
    Description: Mock-up musical equipment discussion board.
    File Summary: About controller
    Date: 2021-09-18
    Author: Coty McKinney
*/

    class About extends Controller {
        protected function Index() {
            $viewModel = new AboutModel();
            $this->returnView($viewModel->Index(), true);
        }
    }


?>