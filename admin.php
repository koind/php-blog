<?php

session_start();

require_once __DIR__ . "/class/AdminPage.php";

$admin = new AdminPage();
$admin->exitUsers();
$admin->itemDelete();

if (!empty($_SESSION['userInfo'])) {

    if (!empty($_POST)) {
        $admin->dataChecking();
    }

    $resArr = $admin->getItemsList();
    require_once __DIR__ . "/views/adminPage.php";

} else {
    header('Location: /php-blog/login.php');
}


