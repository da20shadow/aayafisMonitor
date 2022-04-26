<?php
session_start();
const BASE_URL = 'C:/xampp/htdocs/aayafisMonitor/';

require_once(BASE_URL . "Core/db/config.php");
include_once(BASE_URL."models/user/User.php");
include_once(BASE_URL."models/project/ProjectCrud.php");
include_once(BASE_URL."models/user/UserFormsValidations.php");

global $pdo;

$userCrud = new User($pdo);
$projectCrud = ProjectCrud::getInstance($pdo);

$validate = new UserFormsValidations();
