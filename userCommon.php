<?php

use App\Http\UserHttpHandler;
use App\Repository\UserRepository;
use App\Service\Encryption\EncryptionService;
use App\Service\users\UserService;

require_once ("common.php");

$userRepository = new UserRepository($db);
$encryptionService = new EncryptionService();
$userService = new UserService($userRepository,$encryptionService);
$userHttpHandler = new UserHttpHandler($template);