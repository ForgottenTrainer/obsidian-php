<?php

require_once __DIR__ . '/../core/Controller.php';

class Home extends Controller {
    public function index($a = '') {
        
        $model = new Model();
        echo $model->querys();

        $this->view('home');
    }

}

