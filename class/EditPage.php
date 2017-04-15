<?php

class EditPage
{
    public $news;
    public $files;

    public function __construct()
    {
        require_once __DIR__ . "/../models/News.php";
        require_once __DIR__ . "/Files.php";

        $this->news = new News();
        $this->files = new Files();
    }

    public function exitUsers()
    {
        if ($_GET['exit'] == '1') {
            unset($_SESSION['userInfo']);
            session_destroy();
        }
    }

    public function itemChange()
    {
        if (!empty($_GET['change'])) {
            $resArr =  $this->news->new_SelectArticle($_GET['change']);
            return $resArr;
        }
    }

    public function change()
    {
        if ((!empty($_POST["postName"]) && $_POST["postName"] !== " ") && (!empty($_POST["postData"] && $_POST["postData"] !== " "))
            && (!empty($_POST["postText"] && $_POST["postText"] !== " ")) && (!empty($_POST["id"]))) {
            $postName = trim(strip_tags($_POST["postName"]));
            $postData = trim(strip_tags($_POST["postData"]));
            $postText = trim(strip_tags($_POST["postText"]));
            $postId = trim(strip_tags($_POST["id"]));

            if (!empty($_FILES["postFile"]["error"] == 0)) {
                $postFile = $this->files->filePath('postFile');

                if (isset($postId) && isset($postName) && isset($postData) && isset($postText) && isset($postFile)) {
                    $this->news->new_UpdateAndFile($postName, $postData, $postText, $postFile, $postId);
                    header('Location: /php-blog/admin.php');
                    die;
                }
            } else {
                if (isset($postId) && isset($postName) && isset($postData) && isset($postText)) {
                    $this->news->new_Update($postName, $postData, $postText, $postId);
                    header('Location: /php-blog/admin.php');
                    die;
                }
            }

        }
    }

}