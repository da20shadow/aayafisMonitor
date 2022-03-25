<?php

class UserFormsValidations
{
    //Username Validation
    static function usernameVal($username): string
    {
        $username = self::stringValidation($username);

        if (strlen($username) > 45 || strlen($username) < 5){
            throw new InvalidArgumentException("The username must be between 6 - 45 characters!");
        }else if(!preg_match("/^[a-zA-Z]+[a-zA-Z0-9_]*$/",$username)){
            throw new InvalidArgumentException("The username must start with letter and shouldn't contain any empty spaces!");
        }else if(!preg_match("/^\S+$/",$username)){
            throw new InvalidArgumentException("The username shouldn't contain any empty spaces!");
        }
        return $username;
    }
    //Email validations
    static function emailVal($email): string
    {
        $email = self::stringValidation($email);

        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            throw new InvalidArgumentException("Please, enter valid email!");
        } else if (strlen($email) > 175 || strlen($email) < 10){
            throw new InvalidArgumentException("The email must be between 15 - 175 characters!");
        }else if(!preg_match("/^[a-z]+[a-z0-9_.]*[@][a-z]{3,}[.][a-z]{2,4}$/",$email)){
            throw new InvalidArgumentException("Please, enter valid email!");
        }else if(!preg_match("/^\S+$/",$email)){
            throw new InvalidArgumentException("The email shouldn't contain any empty spaces!");
        }

        return $email;
    }
    //Password Validation
    static function passwordVal($password): string
    {
        $password = self::stringValidation($password);

        if (strlen($password) < 8 || strlen($password) > 75){
            throw new InvalidArgumentException("Password must be between 8 and 75 characters!");
        }
        return md5($password);
    }
    //PerfectMoney Wallet Validation
    static function pmVal($pm_wallet): string
    {
        $pm_wallet = self::stringValidation($pm_wallet);

        if (strlen($pm_wallet) < 6 || strlen($pm_wallet) > 70){
            throw new InvalidArgumentException("Please enter valid PM wallet!");
        }else if(!preg_match("/^[U][0-9]{5,}$/",$pm_wallet)){
            throw new InvalidArgumentException("PM wallet must start with: 'U' for example U1234... ");
        }
        return $pm_wallet;
    }
    //Payeer Wallet Validation
    static function payeerVal($payeer_wallet){

        $payeer_wallet = self::stringValidation($payeer_wallet);

        if (strlen($payeer_wallet) < 6 || strlen($payeer_wallet) > 70){
            throw new InvalidArgumentException("Please enter valid Payeer wallet!");
        }else if(!preg_match("/^[P][0-9]{5,}$/",$payeer_wallet)){
            throw new InvalidArgumentException("Payeer wallet must start with: 'P' for example P1234... ");
        }

    }
    static function stringValidation($string): string
    {
        $string = htmlspecialchars($string);
        $string = trim($string);
        return stripcslashes($string);
    }
}