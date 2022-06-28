<?php

require_once 'BaseRepository.php';
require_once __DIR__ . '/../models/User.php';

class UserRepository extends BaseRepository
{
    public function findByEmail(string $email): ?User
    {
        $sql = '
            SELECT * FROM app_users u
            WHERE email = :email
        ';

        $query = $this
            ->database
            ->connect()
            ->prepare($sql);

        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['user_id'],
            $user['email'],
            $user['password'],
            $user['role']
        );
    }

    public function save(User $user): void
    {
        $sql = '
            INSERT INTO app_users (email, password, role)
            VALUES (?, ?, ?)
        ';

        $query = $this
            ->database
            ->connect()
            ->prepare($sql);

        $query->execute([
            $user->getEmail(),
            $user->getPassword(),
            $user->getRole()
        ]);
    }
}
