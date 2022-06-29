<?php

require_once 'AppController.php';
require_once __DIR__ . '/../persistence/RequestRepository.php';

class DefaultController extends AppController
{
    private $sessionMediator;
    private $requestRepository;

    public function __construct()
    {
        parent::__construct();
        $this->sessionMediator = new SessionMediator();
        $this->requestRepository = new RequestRepository();
    }

    public function index()
    {
        self::render('index');
    }

    public function error()
    {
        self::render('404');
    }

    public function processing()
    {
        $user = $this->sessionMediator->getCurrentUser();

        if (is_null($user)) {
            Routing::run('logout');
        } else if ($this->isPost()) {
            $vin = $_POST['vin'];
            $this->requestRepository->save(
                new VinRequest(
                    null,
                    $user,
                    time(),
                    $vin
                )
            );
            self::render('processing', ['vin' => $vin]);
        } else {
            self::render('index');
        }
    }

    public function report()
    {
        self::render('report');
    }

    public function requests()
    {
        $user = $this->sessionMediator->getCurrentUser();

        if (!is_null($user)) {
            self::render('requests', ['requests' => $this->requestRepository->findAllByUserId($user->getId())]);
        } else {
            Routing::run('logout');
        }
    }
}
