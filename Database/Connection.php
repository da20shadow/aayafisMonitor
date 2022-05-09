<?php

namespace Database;

use PDO;

spl_autoload_register(function ($class) {
    $base = $_SERVER['DOCUMENT_ROOT'];
    $path = explode('_', $class);
    $class = (implode('/', $path));

    $file = $base . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($file)) {
        include_once $file;
    }
});

class Connection
{
    public static function create(): PDODatabase
    {
        $base = $_SERVER['DOCUMENT_ROOT'];
        $file = $base . DIRECTORY_SEPARATOR . "Config/db.ini";
        $dbInfo = parse_ini_file($file);

        $pdo = new PDO($dbInfo['dsn'],$dbInfo['db_user'],$dbInfo['pass']);
        return new PDODatabase($pdo);
    }
}