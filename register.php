<?php
$title = "Register";
include_once ("templates/header.php");
if (isset($_SESSION['username'])) {
    header('Location: account.php');
}else {
    include_once("templates/reg_form.php");

    include_once("templates/footer.php");
}