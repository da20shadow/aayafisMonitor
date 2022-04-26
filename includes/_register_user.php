<?php
require_once("../Core/init.php");

if (isset($_POST['username']) &&
    isset($_POST['email']) &&
    isset($_POST['password'])){

    $error = "";
    try{
        $username = UserFormsValidations::usernameVal($_POST['username']);
        $email = UserFormsValidations::emailVal($_POST['email']);
        $password = UserFormsValidations::passwordVal($_POST['password']);
    }catch (Exception $exception){
        $error = $exception->getMessage();
    }

    if (isset($username) && isset($email) && isset($password)){

        if ($userCrud->checkIfUserExist($username)){
            $error = "Such username already registered!";
        }else if ($userCrud->checkIfUserEmailExist($email)){
            $error = "Such email address already registered!";
        }else {
            $createUserAccount = $userCrud->create_new_user($username,$email,$password);
            if ($createUserAccount){
                $error = "success";
            }else{
                $error = "Unable to create new account!";
            }
        }
    }

    if ($error == "success"){

        echo "Successfully Registered!";
    }else{
        echo $error;
    }
}