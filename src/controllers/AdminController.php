<?php

require_once 'AppController.php';
require_once __DIR__ . '/../utils/SessionMediator.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../persistence/UserRepository.php';
require_once __DIR__ . '/../persistence/SessionRepository.php';
require_once __DIR__ . '/../persistence/RequestRepository.php';

class AdminController extends AppController {
    protected $sessionMediator;
    private $requestRepository;

    public function __construct()
    {
        parent::__construct();
        $this->sessionMediator = new SessionMediator();
        $this->requestRepository = new RequestRepository();
    }


    public function usersRequests() {
        if ($this->sessionMediator->isAdmin()) {
            self::render('users-requests', ['requests' => $this->requestRepository->findAll()]);
        } else {
            Routing::run('index');
        }

    }
}
