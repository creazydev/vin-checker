<?php

require_once 'BaseRepository.php';
require_once __DIR__ . '/../models/VinRequest.php';

class RequestRepository extends BaseRepository
{
    public function findAll(): array
    {
        $sql = '
            SELECT vr.*, u.*
            FROM vin_requests vr
            LEFT JOIN app_users u ON vr.user_id = u.user_id
        ';

        $query = $this
            ->database
            ->connect()
            ->prepare($sql);

        $query->execute();

        $list = $query->fetch(PDO::FETCH_ASSOC);

        if ($list === false) {
            return [];
        }

        return array_map(function ($result) {
            return new VinRequest(
                $result['request_id'],
                new User(
                    $result['user_id'],
                    $result['email'],
                    "",
                    $result['role']
                ),
                $result['requested_at'],
                $result['vin']
            );
        }, $list);
    }

    public function findAllByUserId(int $userId): array
    {
        return [];
    }

    public function save(VinRequest $vinRequest): void
    {
        $sql = '
            INSERT INTO vin_requests (user_id, vin, requested_at)
            VALUES (?, ?, ?)
        ';

        $query = $this
            ->database
            ->connect()
            ->prepare($sql);

        $query->execute([
            $vinRequest->getUser()->getId(),
            $vinRequest->getVin(),
            $vinRequest->getTimestamp()
        ]);
    }
}
