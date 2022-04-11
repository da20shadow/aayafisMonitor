<?php
session_start();
const BASE_URL = 'C:/xampp/htdocs/aayafisMonitor/';

include (BASE_URL."core/db/config.php");
include(BASE_URL."models/user/User.php");
include(BASE_URL."models/project/ProjectCrud.php");
include(BASE_URL."models/user/UserFormsValidations.php");

global $pdo;

$userCrud = new User($pdo);
$projectCrud = ProjectCrud::getInstance($pdo);

$validate = new UserFormsValidations();
