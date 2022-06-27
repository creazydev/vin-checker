<?php

class Session
{
    private $id;
    private $userId;
    private $expiresAt;

    public function __construct($id, $userId, $expiresAt)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->expiresAt = $expiresAt;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getExpiresAt()
    {
        return $this->expiresAt;
    }
}
