<?php

require_once __DIR__ . "/../class/Articles.php";
require_once __DIR__ . "/../class/Database.php";

class News extends Articles
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function new_SelectAuthentication()
    {
        $sql = "SELECT login, password FROM authentication";
        return $this->database->sql_QueryArticl($sql);
    }

    public function new_SelectItems()
    {
        $sql = "SELECT * FROM article";
        return $this->database->sql_QueryArticl($sql);
    }

    public function new_Insert($postName, $postData, $postText, $postFile)
    {
        $sql = "
            INSERT INTO article
            (articleName, articleData, article, path)
            VALUES
            ('" . $postName . "', '" . $postData . "', '" . $postText . "', '" . $postFile . "')
        ";
        $this->database->sql_Inquiries($sql);
    }

    public function new_SelectAdminList()
    {
        $sql = "SELECT id, articleName, articleData, path FROM article";
        return $this->database->sql_QueryArticl($sql);
    }

    public function new_Delete($id)
    {
        $sql = "
            DELETE FROM article
            WHERE id='" . $id . "'
        ";
        $this->database->sql_Inquiries($sql);
    }

    public function new_SelectArticle($id)
    {
        $sql = "SELECT * FROM article WHERE id='" . $id . "'";
        return $this->database->sql_QueryArticl($sql);
    }

    public function new_Update($postName, $postData, $postText, $postId)
    {
        $sql = "
            UPDATE article
            SET articleName='" . $postName . "', articleData='" . $postData . "', article='" . $postText . "'
            WHERE id='" . $postId . "'
        ";
        $this->database->sql_Inquiries($sql);
    }

    public function new_UpdateAndFile($postName, $postData, $postText, $postFile, $postId)
    {
        $sql = "
            UPDATE article
            SET articleName='" . $postName . "', articleData='" . $postData . "', article='" . $postText . "', path='" . $postFile . "'
            WHERE id='" . $postId . "'
        ";
        $this->database->sql_Inquiries($sql);
    }
}