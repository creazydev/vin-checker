<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Session.php';
require_once __DIR__ . '/../persistence/UserRepository.php';
require_once __DIR__ . '/../persistence/SessionRepository.php';

class AuthController extends AppController
{
    private $userRepository;
    private $sessionRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->sessionRepository = new SessionRepository();
    }

    public function login()
    {
        if ($this->isPost()) {
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $user = $this->userRepository->findByEmail($email);

            if (!$user) {
                $this->render('login', ['error' => 'User not found!']);
            } else if ($user->getPassword() !== $password) {
                $this->render('login', ['error' => 'Wrong password!']);
            } else {
                $this->handleAuthenticated($user->getId());
            }
        } else {
            $this->render('login');
        }
    }

    public function register()
    {
        if ($this->isPost()) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];

            if ($password !== $confirmPassword) {
                $this->render('register', ['error' => 'Password does not match']);
            } elseif ($this->userRepository->findByEmail($email)) {
                $this->render('register', ['error' => 'Email is taken']);
            } else {
                $user = new User(0, $email, md5($password), 'USER');

                $this->userRepository->save($user);

                $this->render('login', ['message' => 'You\'ve been successfully registered! Please, sign in.']);
            }
        } else {
            $this->render('register');
        }
    }

    public function logout()
    {
        unset($_COOKIE[Routing::$session_cookie_name]);
        setcookie(Routing::$session_cookie_name, null, -1, '/');
        header("Location: /login");
    }

    private function handleAuthenticated($userId)
    {
        $sessionTime = 86400 * 30 * 30;

        $newSession = new Session(
            session_create_id($userId),
            $userId,
            time() + $sessionTime
        );

        $this->sessionRepository->save($newSession);
        setcookie(Routing::$session_cookie_name, $newSession->getId(), $newSession->getExpiresAt(), "/");
        $_COOKIE[Routing::$session_cookie_name] = $newSession->getId();
        header("Location: /index");
        exit;
    }
}
