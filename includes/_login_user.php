<?php
require_once ("../core/init.php");

if (isset($_POST['email']) &&
    isset($_POST['password'])){

    $error = "";
    try{
        $email = UserFormsValidations::emailVal($_POST['email']);
        $password = UserFormsValidations::passwordVal($_POST['password']);
    }catch (Exception $exception){
        $error = $exception->getMessage();
    }

    if (isset($email) && isset($password)){

        $logUser = $userCrud->login($email,$password);

        if ($logUser){
            $_SESSION['user_id'] = $logUser['id'];
            $_SESSION['username'] = $logUser['username'];

            $error = "success";
        }else {
            $error = "Wrong Password Or Email!";
        }
    }

    if ($error == "success"){
        echo "Successfully Logged in!";
    }else{
        echo $error;
    }
}