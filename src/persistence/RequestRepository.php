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
            ->query($sql);

        return self::mapListResult($query->fetchAll());
    }

    public function findAllByUserId(int $userId): array
    {
        $sql = '
            SELECT vr.*, u.*
            FROM vin_requests vr
            LEFT JOIN app_users u ON vr.user_id = u.user_id
            WHERE vr.user_id = :userId
        ';

        $query = $this
            ->database
            ->connect()
            ->prepare($sql);

        $query->bindParam(':userId', $userId, PDO::PARAM_STR);
        $query->execute();
        return self::mapListResult($query->fetchAll(PDO::FETCH_ASSOC));
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

    private function mapListResult($result): array
    {
        if ($result === false) {
            $result = [];
        } else if (!is_array($result)) {
            $result = [$result];
        }

        return array_map(function ($result_el) {
            return new VinRequest(
                $result_el['request_id'],
                new User(
                    $result_el['user_id'],
                    $result_el['email'],
                    "",
                    $result_el['role']
                ),
                $result_el['requested_at'],
                $result_el['vin']
            );
        }, $result);
    }
}
