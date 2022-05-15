<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index() {
        self::render('index');
    }

    public function error() {
        self::render('404');
    }
}