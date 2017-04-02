<?php

session_start();

if ($_GET['exit'] == '1') {
    unset($_SESSION['userInfo']);
    session_destroy();
}

require_once __DIR__ . "/models/blog.php";
require_once __DIR__ . "/functions/file.php";

if (!empty($_GET['delete'])) {
    blog_Delete($_GET['delete']);
}

if (!empty($_SESSION['userInfo'])) {
    if (!empty($_POST)) {
        if ((!empty($_POST["postName"]) && $_POST["postName"] !== " ") && (!empty($_POST["postData"] && $_POST["postData"] !== " "))
            && (!empty($_POST["postText"] && $_POST["postText"] !== " "))) {
            $postName = trim(strip_tags($_POST["postName"]));
            $postData = trim(strip_tags($_POST["postData"]));
            $postText = trim(strip_tags($_POST["postText"]));

            if (!empty($_FILES)) {
                $postFile = filePath('postFile');
            }

            if (isset($postName) && isset($postData) && isset($postText) && isset($postFile)) {
                blog_Insert($postName, $postData, $postText, $postFile);
                header('Location: /php-blog/admin.php');
                die;
            }



        }
    }


    $resArr = blog_SelectAdminList();
    require_once __DIR__ . "/views/adminPage.php";

} else {
    header('Location: /php-blog/login.php');
}


