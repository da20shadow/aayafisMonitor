<?php

$db_host =  "localhost";
$db_user =  "root";
$pass =     "";
$db_name =  "aayafis_monitor";
$charset =  "utf8mb4";

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$charset";

try {
    $pdo = new PDO($dsn,$db_user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $exception){
    throw new PDOException($exception->getMessage());
}
