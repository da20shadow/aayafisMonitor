<?php

use App\Repository\project\ProjectRepository;
use App\Service\project\ProjectService;
use Database\Connection;

spl_autoload_register(function ($class) {
    $base = $_SERVER['DOCUMENT_ROOT'];
    $path = explode('_', $class);
    $class = (implode('/', $path));

    $file = $base . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($file)) {
        include_once $file;
    }
});

$db = Connection::create();
$projectRepository = new ProjectRepository($db);
$projectService = new ProjectService($projectRepository);

$result = $projectService->getTotalMembers();
echo htmlspecialchars($result['totalMembers']);
