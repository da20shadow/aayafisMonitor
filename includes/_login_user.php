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
            $error = "Such user not exist!";
        }
    }

    if ($error == "success"){

        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">\n" .
            "            <symbol id=\"check-circle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">\n" .
            "                <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>\n" .
            "            </symbol>\n" .
            "        </svg>\n" .
            "        <div class=\"alert alert-success d-flex align-items-center\" role=\"alert\">\n" .
            "            <svg class=\"bi flex-shrink-0 me-2\" width=\"34\" height=\"34\" role=\"img\" aria-label=\"Success:\">\n" .
            "                <use xlink:href=\"#check-circle-fill\"/>\n" .
            "            </svg>\n" .
            "            <div>\n" .
            "               Successfully Logged in! <br>"  .
            "            </div>\n" .
            "        </div>";
    }else{
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">\n" .
            "            <symbol id=\"exclamation-triangle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">\n" .
            "                <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>\n" .
            "            </symbol>\n" .
            "        </svg>\n" .
            "        <div class=\"alert alert-danger d-flex align-items-center\" role=\"alert\">\n" .
            "            <svg class=\"bi flex-shrink-0 me-2\" width=\"34\" height=\"34\" role=\"img\" aria-label=\"Danger:\">\n" .
            "                <use xlink:href=\"#exclamation-triangle-fill\"/>\n" .
            "            </svg>\n" .
            "            <div>\n" .
            "               $error" .
            "            </div>\n" .
            "        </div>";
    }
}