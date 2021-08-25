<?php
/*
    Title: Shareboard 
    Description: Practicing with PHP OOP and PDO by building a simple site.
    File Summary: Controller class
    Date: 2021-08-23
    Author: Coty McKinney
*/

    abstract class Controller{
        protected $request;
        protected $action;

        public function __construct($action, $request) {
            $this->action = $action;
            $this->request = $request;
        }

        public function executeAction() {
            return $this->{$this->action}();
        }

        protected function returnView($viewModel, $fullView) {
            $view = 'Views/' . get_class($this) . '/' . $this->action . '.php';
            if(isset($fullView)) {
                require('Views/main.php');
            }else {
                require($view);
            }
        }
    }

?>