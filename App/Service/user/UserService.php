<?php

namespace App\Service\user;

use App\Data\UserDTO;
use App\Repository\user\UserRepositoryInterface;
use App\Service\Encryption\EncryptionServiceInterface;
use Generator;

class UserService implements UserServiceInterface
{

    private UserRepositoryInterface $userRepository;
    /**
     * @var EncryptionServiceInterface
     */
    private EncryptionServiceInterface $encryptionService;

    /**
     * @param UserRepositoryInterface $userRepository
     * @param EncryptionServiceInterface $encryptionService
     */
    public function __construct(UserRepositoryInterface $userRepository,
                    EncryptionServiceInterface $encryptionService)
    {
        $this->userRepository = $userRepository;
        $this->encryptionService = $encryptionService;
    }


    public function register(UserDTO $userDTO, string $confirmPassword): bool
    {
        if ($userDTO->getPassword() !== $confirmPassword){
            return false;
        }

        if (null !== $this->userRepository->findUserByUsername($userDTO->getUsername())){
            return false;
        }

        $this->encryptPassword($userDTO);

        return $this->userRepository->insert($userDTO);
    }

    public function login(string $email, string $password): ?UserDTO
    {
        $userFromDB = $this->userRepository->findUserByEmail($email);

        if (null === $userFromDB){
            return null;
        }

        if (false === $this->encryptionService->verify($password,$userFromDB->getPassword())){
            return null;
        }
        return $userFromDB;
    }

    public function currentUser(): ?UserDTO
    {
        // TODO: Implement currentUser() method.
    }

    public function isLogged(): bool
    {
        // TODO: Implement isLogged() method.
    }

    public function edit(UserDTO $userDTO): bool
    {
        // TODO: Implement edit() method.
    }

    public function getAll(): Generator
    {
        // TODO: Implement getAll() method.
    }

    /**
     * @param UserDTO $userDTO
     */
    private function encryptPassword(UserDTO $userDTO): void
    {
        $plainPassword = $userDTO->getPassword();
        $passwordHash = $this->encryptionService->hash($plainPassword);
        $userDTO->setPassword($passwordHash);
    }
}