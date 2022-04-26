<?php

namespace App\Repository;

use App\Data\UserDTO;
use Database\PDODatabase;
use Generator;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var PDODatabase
     */
    private PDODatabase $db;

    /**
     * @param PDODatabase $db
     */
    public function __construct(PDODatabase $db)
    {
        $this->db = $db;
    }


    public function insert(UserDTO $userDTO): bool
    {
        $this->db->query("INSERT INTO users 
                            (username,email,password,pm_wallet,payeer_wallet)
                            VALUES (:username,:email,:password,:pm_wallet,:payeer_wallet)"
        )->execute(array(
            $userDTO->getUsername(),
            $userDTO->getEmail(),
            $userDTO->getPassword(),
            $userDTO->getPerfectMoney(),
            $userDTO->getPayeer()
        ));
        return true;
    }

    public function update(int $id, UserDTO $userDTO): bool
    {
        $this->db->query(
            "UPDATE users
                    SET
                        username = :username,
                        email = :email,
                        password = :password,
                        pm_wallet = :pm_wallet,
                        payeer_wallet = :payeer_wallet
                    WHERE id = :id "
        )->execute(array(
            $userDTO->getUsername(),
            $userDTO->getEmail(),
            $userDTO->getPassword(),
            $userDTO->getPerfectMoney(),
            $userDTO->getPayeer()
        ));
        return true;
    }

    public function delete(int $id): bool
    {
        $this->db->query(
            "DELETE FROM users WHERE id = :id"
        )->execute(array(
            $id
        ));
        return true;
    }

    public function findUserByID(int $id): ?UserDTO
    {
        return $this->db->query(
            "SELECT * FROM users WHERE id = :id"
        )->execute(array(
            $id
        ))->fetch(UserDTO::class)
            ->current();
    }

    public function findUserByUsername(string $username): ?UserDTO
    {
        return $this->db->query(
            "SELECT * FROM users WHERE username = :username"
        )->execute(array(
            $username
        ))->fetch(UserDTO::class)
        ->current();

    }

    public function getAll(): Generator
    {
        return $this->db->query(
            "SELECT * FROM users"
        )->execute()->fetch(UserDTO::class);
    }
}