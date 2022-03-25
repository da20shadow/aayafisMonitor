<?php
$title = "Login";
include_once ("templates/header.php");
if (isset($_SESSION['username'])) {
    header('Location: account.php');
}else{
    include_once ("templates/login_page.php");

    include_once ("templates/footer.php");
}
