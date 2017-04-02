<?php

session_start();

if ($_GET['exit'] == '1') {
    unset($_SESSION['userInfo']);
    session_destroy();
}

require_once __DIR__ . "/models/blog.php";
require_once __DIR__ . "/functions/file.php";

if (!empty($_GET['change'])) {
    $resArr = blog_SelectArticle($_GET['change']);
}

if (!empty($_SESSION['userInfo'])) {
    if (!empty($_POST)) {
        if ((!empty($_POST["postName"]) && $_POST["postName"] !== " ") && (!empty($_POST["postData"] && $_POST["postData"] !== " "))
            && (!empty($_POST["postText"] && $_POST["postText"] !== " ")) && (!empty($_POST["id"]))) {
            $postName = trim(strip_tags($_POST["postName"]));
            $postData = trim(strip_tags($_POST["postData"]));
            $postText = trim(strip_tags($_POST["postText"]));
            $postId = trim(strip_tags($_POST["id"]));


            if (!empty($_FILES)) {
                $postFile = filePath('postFile');

                if (isset($postId) && isset($postName) && isset($postData) && isset($postText) && isset($postFile)) {
                    blog_Insert($postName, $postData, $postText, $postFile);
                    header('Location: /php-blog/admin.php');
                    die;
                }
            } else {
                if (isset($postId) && isset($postName) && isset($postData) && isset($postText)) {
                    blog_Insert($postName, $postData, $postText, $postId);
                    header('Location: /php-blog/admin.php');
                    die;
                }
            }

        }
    }

    require_once __DIR__ . "/views/edintPage.php";

} else {
    header('Location: /php-blog/login.php');
}
