<?php

require_once ("userCommon.php");

siteHeader("Login");

$userHttpHandler->login($userService,$_POST);

siteFooter();
