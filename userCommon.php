<?php

require_once ("common.php");

use App\Http\user\UserHttpHandler;
use App\Repository\user\UserRepository;
use App\Service\Encryption\EncryptionService;
use App\Service\user\UserService;



$userRepository = new UserRepository($db);
$encryptionService = new EncryptionService();
$userService = new UserService($userRepository,$encryptionService);
$userHttpHandler = new UserHttpHandler($template,$dataBinder);