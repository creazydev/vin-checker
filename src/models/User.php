<?php

class User
{
    private $id;
    private $email;
    private $password;
    private $role;

    public function __construct(
        int $id,
        string $email,
        string $password,
        string $role
    )
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRole(): string
    {
        return $this->role;
    }
}
