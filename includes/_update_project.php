<?php
include_once("../Core/init.php");
//include_once ("../models/project/ProjectInfo.php");
include_once ("../models/project/ProjectCrud.php");

if (isset($_POST['project_id']) && isset($_POST['launch_date']) &&
    isset($_POST['project_name']) && isset($_POST['status']) &&
    isset($_POST['url']) && isset($_POST['h_metrics']) &&
    isset($_POST['img_url']) && isset($_POST['commission']) &&
    isset($_POST['rcb']) && isset($_POST['description'])){

    $projectID = $_POST['project_id'];
    $launchDate = $_POST['launch_date'];
    $projectName = $_POST['project_name'];
    $projectUrl = $_POST['url'];
    $projectImg = $_POST['img_url'];
    $projectHMetrics = $_POST['h_metrics'];
    $projectCommission = $_POST['commission'];
    $projectRCB = $_POST['rcb'];
    $projectStatus = $_POST['status'];
    $projectDescription = $_POST['description'];

//    $projectCrud = ProjectCrud::getInstance($pdo);
    $updated = $projectCrud->updateProjectId($projectID,$projectName,$projectUrl,$projectHMetrics,
        $projectImg,$projectCommission,$projectRCB,$projectStatus,$projectDescription,$launchDate);

    if ($updated){
        echo "Successfully Updated Project $projectName";
    }else{
        echo $_SESSION['id_error'];
        unset($_SESSION['id_error']);
    }
}else{
    echo "Error!";
}