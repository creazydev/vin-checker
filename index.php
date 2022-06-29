<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('error', 'DefaultController');
Routing::post('processing', 'DefaultController');
Routing::get('report', 'DefaultController');
Routing::get('requests', 'DefaultController');

Routing::post('login', 'AuthController');
Routing::post('register', 'AuthController');
Routing::post('logout', 'AuthController');
Routing::get('usersRequests', 'AdminController');

Routing::run($path);
