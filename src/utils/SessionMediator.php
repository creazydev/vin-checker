<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../persistence/UserRepository.php';
require_once __DIR__ . '/../persistence/SessionRepository.php';

class SessionMediator {
    private $userRepository;
    private $sessionRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->sessionRepository = new SessionRepository();
    }

    public function getCurrentUser(): ?User
    {
        $sessionById = $this->sessionRepository->findBySessionId($_COOKIE[Routing::$session_cookie_name]);

        if (!is_null($sessionById)) {
            return $this->userRepository->findById($sessionById->getUserId());
        } else {
            return null;
        }
    }

    public function isAdmin(): bool
    {
        $user = $this->getCurrentUser();

        if (is_null($user)) {
            return false;
        } else {
            return $user->getRole() === 'ADMIN';
        }
    }
}
