<?php
    Class PagesController extends Controller {
        
        public function __construct() {
            $this->pageModel = $this->model('PageModel');
        }

        public function index() {
            $this->view('/pages/home');
        }
    }
?>