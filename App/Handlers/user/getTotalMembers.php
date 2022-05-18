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

$result = $projectService->getMonitorStat();

$totalMembers = $result[0]->getTotalMembers();
$paidRCB = $result[0]->getPaidRCB();
$rcbProcessed = $result[0]->getRcbProcessed();
echo "
        <div class=\"stat-box-header\">
                <h5>MONITOR STATISTIC</h5>
        </div>
            <table style=\"width: 100%\">
                <tr>
                    <td>Total Members:</td>
                    <td id=\"totalMembers\" style=\"text-align: right\">$totalMembers</td>
                </tr>
                <tr>
                    <td>Total RCB Paid:</td>
                    <td id=\"paidRCB\" style=\"text-align: right\">$$paidRCB</td>
                </tr>
                <tr>
                    <td>Total RCB Processed:</td>
                    <td id=\"processedRCB\" style=\"text-align: right\">$rcbProcessed</td>
                </tr>
            </table>    
                
        <div class=\"stat-box-header\">
                <h5>Recently Paid RCB</h5>
            </div>
            <table id=\"recent\" style=\"width: 100%\">";

        foreach ($result[1] as $rcbUser){
            $username = $rcbUser['username'];
            $rcb = $rcbUser['rcb'];
            echo "
            <tr>
                <td>$username</td>
                <td style=\"text-align: right\">$$rcb</td>
            </tr>  ";
        }

echo " </table> ";



//echo htmlspecialchars($result['totalMembers']);
