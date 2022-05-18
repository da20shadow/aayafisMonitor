<?php

session_start();
spl_autoload_register();

use Core\DataBinder;
use Core\Template;
use Database\PDODatabase;

require_once ("App/Templates/includes/headerFooter.php");

$template = new Template();
$dataBinder = new DataBinder();
$dbInfo = parse_ini_file("Config/db.ini");
$pdo = new PDO($dbInfo['dsn'],$dbInfo['db_user'],$dbInfo['pass']);
$db = new PDODatabase($pdo);