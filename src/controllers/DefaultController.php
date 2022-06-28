<?php

require_once 'AppController.php';
require_once __DIR__ . '/../persistence/RequestRepository.php';

class DefaultController extends AppController {
    private $sessionMediator;
    private $requestRepository;

    public function __construct()
    {
        parent::__construct();
        $this->sessionMediator = new SessionMediator();
        $this->requestRepository = new RequestRepository();
    }

    public function index() {
        self::render('index');
    }

    public function error() {
        self::render('404');
    }

    public function processing() {
        if ($this->isPost()) {
            self::render('processing', ['vin' => $_POST['vin']]);
        } else {
            self::render('index');
        }
    }

    public function report() {
        self::render('report');
    }

    public function requests() {
        $user = $this->sessionMediator->getCurrentUser();
        self::render('requests', ['requests' => $this->requestRepository->findAllByUserId($user->getId())]);
    }
}
