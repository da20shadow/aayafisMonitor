<?php

class User
{
    protected $pdo;
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    //Register new user account
    function create_new_user($username,$email,$password): bool
    {

        $username = UserFormsValidations::stringValidation($username);
        $email = UserFormsValidations::stringValidation($email);
        $password = UserFormsValidations::passwordVal($password);

        try {
            $sql = "INSERT INTO `users`(`username`, `email`, `password`) 
                    VALUES (:username,:email,:password)";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                ':username' => $username,
                ':email' => $email,
                ':password' => $password
            ));
            return true;
        } catch (PDOException $err){
            throw new PDOException($err);
        }

    }

    //Login the user
    public function login($email, $password){
        $passwordHash = md5($password);
        $stmt = $this->pdo->prepare('SELECT id,username,email FROM `users` 
                                     WHERE `email` = :email AND `password` = :password');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $passwordHash, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    //Check if user exist
    function checkIfUserExist($username): bool
    {
        $sql = "SELECT username FROM users WHERE username = :username";
        $stm = $this->pdo->prepare($sql);
        $stm->execute(array(':username'=>$username));
        $result = $stm->fetch();
        if ($result){
            return true;
        }else{
            return false;
        }
    }
    //Check if user email exist
    function checkIfUserEmailExist($email): bool
    {
        $sql = "SELECT email FROM users WHERE email = :email";

        $stm = $this->pdo->prepare($sql);
        $stm->execute(array(':email'=>$email));
        $result = $stm->fetch();
        if ($result){
            return true;
        }else{
            return false;
        }
    }

    //Get user info
    function getUserInfo($user_id){

        $user_id = UserFormsValidations::stringValidation($user_id);

        $sql = "SELECT * FROM users WHERE id = :user_id";

        $stm = $this->pdo->prepare($sql);
        $stm->execute(array(':user_id'=>$user_id));
        return $stm->fetch();
    }
}