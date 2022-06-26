<?php

require_once __DIR__ . '/DatabaseAdapter.php';

class BaseRepository {
    protected $database;

    public function __construct()
    {
        $this->database = new DatabaseAdapter();
    }
}
