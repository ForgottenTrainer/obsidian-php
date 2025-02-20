<?php
require_once __DIR__ . '/../core/Controller.php';

class Products extends Controller {
    public function index() {
        $this->view('products/product');
    }
}