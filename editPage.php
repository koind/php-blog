<?php

session_start();

require_once __DIR__ . "/class/EditPage.php";

$edit = new EditPage();
$edit->exitUsers();
$resArr = $edit->itemChange();


if (!empty($_SESSION['userInfo'])) {
    if (!empty($_POST)) {
        $edit->change();
    }

    require_once __DIR__ . "/views/edintPage.php";

} else {
    header('Location: /php-blog/login.php');
}
