<?php
session_start();

include ("db/config.php");
include ("user/User.php");
include ("user/UserFormsValidations.php");

global $pdo;

$userCrud = new User($pdo);
$validate = new UserFormsValidations();

const BASE_URL = 'http://localhost:8090/aayafisMonitor/';