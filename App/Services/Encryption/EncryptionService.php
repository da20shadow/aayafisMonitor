<?php

namespace App\Service\Encryption;

class EncryptionService implements EncryptionServiceInterface
{

    public function hash(string $password): string
    {
        return password_hash($password,PASSWORD_ARGON2I);
    }

    public function verify(string $password, string $hash): bool
    {
        return password_verify($password,$hash);
    }
}