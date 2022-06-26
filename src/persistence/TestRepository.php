<?php

require_once 'BaseRepository.php';

class TestRepository extends BaseRepository
{
    public function test_connection(): array
    {
        $stmt = $this->database->connect()->prepare('
            SELECT *
            FROM pg_catalog.pg_tables;
        ');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);;
    }
}
