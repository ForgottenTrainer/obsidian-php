<?php

require_once __DIR__ . '/../core/Controller.php';

class Home extends Controller {
    public function index($a = '') {
        
        $model = new Model();
        //$arr['id'] = 1;
        $arr['name'] = 'test2';
        $arr['email'] = 'test2@gmail.com';
        $arr['password'] = '131231';
        
        print_r($model->where($arr)) ;
        
        //$model->insert($arr);
        //$model->delete(3);


        $this->view('home');
    }

}

