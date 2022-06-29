<?php

class VinRequest
{
    private $requestId;
    private $user;
    private $timestamp;
    private $vin;

    public function __construct($requestId, $user, $timestamp, $vin)
    {
        $this->requestId = $requestId;
        $this->user = $user;
        $this->timestamp = $timestamp;
        $this->vin = $vin;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function getVin()
    {
        return $this->vin;
    }
}
