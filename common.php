<?php

//use App\Http\UserHttpHandler;
//use App\Repository\UserRepository;
//use App\Service\Encryption\EncryptionService;
//use App\Service\users\UserService;
//use Core\Template;
//use Database\PDODatabase;

session_start();
spl_autoload_register();

$template = new Core\Template();
$dbInfo = parse_ini_file("Config/db.ini");
$pdo = new PDO($dbInfo['dsn'],$dbInfo['db_user'],$dbInfo['pass']);
$db = new Database\PDODatabase($pdo);
$userRepository = new App\Repository\UserRepository($db);
$encryptionService = new App\Service\Encryption\EncryptionService();
$userService = new App\Service\users\UserService($userRepository,$encryptionService);
$userHttpHandler = new App\Http\UserHttpHandler($template);