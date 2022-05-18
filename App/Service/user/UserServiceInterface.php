<?php

namespace App\Service\user;

use App\Data\UserDTO;
use Generator;

interface UserServiceInterface
{
    public function register(UserDTO $userDTO, string $confirmPassword) : bool;
    public function login(string $email, string $password) : ?UserDTO;
    public function currentUser() : ?UserDTO;
    public function isLogged() : bool;
    public function edit(UserDTO $userDTO) : bool;

    /**
     * @return Generator
     */
    public function getAll() : Generator;
}