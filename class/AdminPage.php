<?php



class AdminPage
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

    public function itemDelete()
    {
        if (!empty($_GET['delete'])) {
            $this->news->new_Delete($_GET['delete']);
        }
    }

    public function dataChecking()
    {
        if ((!empty($_POST["postName"]) && $_POST["postName"] !== " ") && (!empty($_POST["postData"] && $_POST["postData"] !== " "))
            && (!empty($_POST["postText"] && $_POST["postText"] !== " "))) {
            $postName = trim(strip_tags($_POST["postName"]));
            $postData = trim(strip_tags($_POST["postData"]));
            $postText = trim(strip_tags($_POST["postText"]));

            if (!empty($_FILES)) {
                $postFile = $this->files->filePath('postFile');
            }

            if (isset($postName) && isset($postData) && isset($postText) && isset($postFile)) {
                $this->news->new_Insert($postName, $postData, $postText, $postFile);
                header('Location: /php-blog/admin.php');
                die;
            }
        }
    }

    public function getItemsList()
    {
        return $this->news->new_SelectAdminList();
    }
}