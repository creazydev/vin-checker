<?php

require_once 'AppController.php';
require_once __DIR__ . '/../utils/SessionMediator.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../persistence/UserRepository.php';
require_once __DIR__ . '/../persistence/SessionRepository.php';

class AdminController extends AppController {
    protected $sessionMediator;

    public function __construct()
    {
        parent::__construct();
        $this->sessionMediator = new SessionMediator();
    }


    public function usersRequests() {
        if ($this->sessionMediator->isAdmin()) {
            self::render('users-requests');
        } else {
            Routing::run('index');
        }

    }
}
