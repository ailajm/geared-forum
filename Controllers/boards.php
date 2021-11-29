<?php
/*
    Title: GEARED 
    Description: Mock-up musical equipment discussion board.
    File Summary: Boards controller
    Date: 2021-08-23
    Author: Coty McKinney
*/

    class Boards extends Controller {
        protected function Index() {
            $viewModel = new BoardModel();
            $this->returnView($viewModel->Index(), true);
        }

        protected function add() {
            if(!isset($_SESSION['is_logged_in'])) {
                header('Location: '.ROOT_URL.'boards');
            }else {
                $viewModel = new BoardModel();
                $this->returnView($viewModel->Add(), true);
            }
        }

        protected function Board() {
            $viewModel = new BoardModel();
            $this->returnView($viewModel->Board(), true);
        }
    }

?>