<?php

namespace App\Http;

use App\Data\UserDTO;
use App\Service\users\UserServiceInterface;

class UserHttpHandler extends UserHttpHandlerAbstract
{
    public function register(UserServiceInterface $userService,
                                array $formData = []){

        if (isset($formData['register'])){
            $this->handleRegisterProcess($userService,$formData);
        }else {
            $this->render("users/register");
        }
    }

    private function handleRegisterProcess(UserServiceInterface $userService, array $formData)
    {
        $user = UserDTO::create(
            $formData['username'],
            $formData['email'],
            $formData['password'],
            $formData['pm_wallet'],
            $formData['payeer_wallet']
        );
        if ($userService->register($user,$formData['confirm_password'])){
            $this->redirect("login.php");
        }else {

        }
    }

}