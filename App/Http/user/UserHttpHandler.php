<?php

namespace App\Http\user;

use App\Data\ErrorDTO;
use App\Data\UserDTO;
use App\Http\BaseHttpHandler;
use App\Service\user\UserServiceInterface;

class UserHttpHandler extends BaseHttpHandler
{

    public function login(UserServiceInterface $userService, array $formData = []){
        if (isset($formData['email']) && isset($formData['password'])){
            $this->handleLoginProcess($userService,$formData);
        }else {
            $this->render("user/_login");
        }
    }

    private function handleLoginProcess($userService,$formData){
        $user = $userService->login($formData['email'],$formData['password']);

        $currentUser = $this->dataBinder->bind($formData,UserDTO::class);

        if (null !== $user) {
            $_SESSION['username'] = $user->getUsername();
            $this->redirect("account.php");
        }else {
            $this->render("user/_login",$currentUser,
                new ErrorDTO("Wrong password or username!"));
        }
    }

    public function register(UserServiceInterface $userService,
                                array $formData = []){

        if (isset($formData['register'])){
            $this->handleRegistrationProcess($userService,$formData);
        }else {
            $this->render("users/register");
        }
    }

    private function handleRegistrationProcess(UserServiceInterface $userService, array $formData)
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