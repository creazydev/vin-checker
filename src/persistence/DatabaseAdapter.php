<?php

class DatabaseAdapter
{
    private $username;
    private $password;
    private $host;
    private $database;
    private $port;

    public function __construct()
    {
        $this->username = $_ENV['DATABASE_USERNAME'];
        $this->password = $_ENV['DATABASE_PASSWORD'];
        $this->host = $_ENV['DATABASE_HOST'];
        $this->database = $_ENV['DATABASE_NAME'];
        $this->port = $_ENV['DATABASE_PORT'];
    }

    public function connect()
    {
        try {
            $conn = new PDO(
                "pgsql:host=$this->host;port=$this->port;dbname=$this->database",
                $this->username,
                $this->password,
                ["sslmode" => "prefer"]
            );

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
