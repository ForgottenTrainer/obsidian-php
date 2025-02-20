<?php

require_once __DIR__ . '/../core/Controller.php';

class Home extends Controller {
    public function index($a = '') {
        
        $this->view('home');
    }

}

