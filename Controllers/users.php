<?php
/*
    Title: GEARED 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: Users controller
    Date: 2021-08-23
    Author: Coty McKinney
*/

    class Users extends Controller {
        protected function Index() {
            $viewModel = new UserModel();
            $this->returnView($viewModel->Index(), true);
        }

        protected function Login() {
            $viewModel = new UserModel();
            $this->returnView($viewModel->Login(), true);
        }

        protected function Register() {
            $viewModel = new UserModel();
            $this->returnView($viewModel->Register(), true);
        }
    }


?>