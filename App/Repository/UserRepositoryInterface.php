<?php

namespace App\Repository;

use App\Data\UserDTO;
use Generator;

interface UserRepositoryInterface
{
    public function insert(UserDTO $userDTO) : bool;
    public function update(int $id, UserDTO $userDTO) : bool;
    public function delete(int $id) : bool;
    public function findUserByID(int $id) : ?UserDTO;
    public function findUserByUsername(string $username) : ?UserDTO;

    /**
     * @return Generator
     */
    public function getAll() : Generator;
}