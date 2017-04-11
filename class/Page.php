<?php

/**
 * Created by PhpStorm.
 * User: AdminPS
 * Date: 10.04.2017
 * Time: 22:26
 */
class Page
{
    public $item;

    public function __construct()
    {
        require_once __DIR__ . "/../models/News.php";

        if (!empty($_GET["id"])) {
            $id = $_GET["id"];

            $page = new News();

            if (false !== $page->new_SelectArticle($id)) {
                $res = $page->new_SelectArticle($id);

                foreach ($res as $val) {
                    $this->item = $val;
                }
            } else {
                $this->item["articleName"] = "Нет такой статьи";
                $this->item["article"] = "Нет такой статьи";
            }
        }
    }
}