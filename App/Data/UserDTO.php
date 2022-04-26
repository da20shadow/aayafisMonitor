<?php

namespace App\Data;

class UserDTO
{
    private int $userID;
    private string $username;
    private string $email;
    private string $password;
    private string $perfectMoney;
    private string $payeer;
    private float $totalPaidRCB;

    public static function create($username,$email,$password,$pm,$payeer,$id = null): UserDTO
    {
        return (new UserDTO())
                    ->setUsername($username)
                    ->setEmail($email)
                    ->setPassword($password)
                    ->setPerfectMoney($pm)
                    ->setPayeer($payeer)
                    ->setUserID($id);
    }

    public function setUserID(int $userID): UserDTO
    {
        $this->userID = $userID;
        return $this;
    }



    /**
     * @return string
     */
    public function getUserID(): string
    {
        return $this->userID;
    }

    /**
     * @return float
     */
    public function getTotalPaidRCB(): float
    {
        return $this->totalPaidRCB;
    }

    /**
     * @param float $totalPaidRCB
     */
    public function setTotalPaidRCB(float $totalPaidRCB): void
    {
        $this->totalPaidRCB = $totalPaidRCB;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): UserDTO
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): UserDTO
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): UserDTO
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPerfectMoney(): string
    {
        return $this->perfectMoney;
    }

    public function setPerfectMoney(string $perfectMoney): UserDTO
    {
        $this->perfectMoney = $perfectMoney;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayeer(): string
    {
        return $this->payeer;
    }

    public function setPayeer(string $payeer): UserDTO
    {
        $this->payeer = $payeer;
        return $this;
    }


}