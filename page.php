<?php

require_once __DIR__ . "/models/blog.php";

if (!empty($_GET["id"])) {
    $id = $_GET["id"];

    if (false !== blog_SelectArticle($id)) {
        $items = blog_SelectArticle($id);
    } else {
        $items = [];
        $items["articleName"] = "Нет такой статьи";
        $items["article"] = "Нет такой статьи";
    }
}

require_once __DIR__ . '/views/page.php';