<?php
$title = "Edit Account";
include_once ("templates/header.php");
if (isset($_SESSION['username'])) {
    include_once("templates/edit_user_account.php");

    include_once("templates/footer.php");
}else{
    header('Location: login.php');
}