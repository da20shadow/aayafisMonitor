<?php
require_once("../Core/init.php");
if (isset($_POST['status'])){

    $status = $_POST['status'];
    if ($status >= 0 && $status < 4){
        $updated = $projectCrud->updateProjectStatus($_POST['project_id'],$_POST['status']);

        if ($updated){
            echo "Successfully updated status";
        }else{
            echo $_SESSION['id_error'];
            unset($_SESSION['id_error']);
        }

    }else {
        echo "Error there is no such status!";
    }

}