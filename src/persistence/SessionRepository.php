<?php

require_once 'BaseRepository.php';
require_once __DIR__ . '/../models/User.php';

class SessionRepository extends BaseRepository
{
    public function findBySessionId(string $sessionId): ?Session
    {
        $sql = '
            SELECT * FROM users_sessions
            WHERE session_id = :sessionId
        ';

        $query = $this
            ->database
            ->connect()
            ->prepare($sql);

        $query->bindParam(':sessionId', $sessionId, PDO::PARAM_STR);
        $query->execute();

        $session = $query->fetch(PDO::FETCH_ASSOC);

        if ($session == false) {
            return null;
        }

        return new Session(
            $session['session_id'],
            $session['user_id'],
            $session['expires_at']
        );
    }

    public function save(Session $session): void
    {
        $sql = '
            INSERT INTO users_sessions (session_id, expires_at, user_id)
            VALUES (?, ?, ?)
        ';

        $query = $this
            ->database
            ->connect()
            ->prepare($sql);

        $query->execute([
            $session->getId(),
            $session->getExpiresAt(),
            $session->getUserId()
        ]);
    }
}
