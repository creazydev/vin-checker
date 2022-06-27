<?php

class VinRequest
{
    private $user_email;
    private $timestamp;
    private $vin;

    public function __construct($user_id, $timestamp, $vin)
    {
        $this->user_email = $user_id;
        $this->timestamp = $timestamp;
        $this->vin = $vin;
    }

    public function getUserEmail()
    {
        return $this->user_email;
    }

    public function setUserEmail($user_email)
    {
        $this->user_email = $user_email;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    public function getVin()
    {
        return $this->vin;
    }

    public function setVin($vin)
    {
        $this->vin = $vin;
    }
}
