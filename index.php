<?php
require_once ("projectCommon.php");

siteHeader("Investment Projects");

$projectHttpHandler->home($projectService);

siteFooter("getData","stat/getMonitorStats");