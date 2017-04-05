<?php

require_once __DIR__ . "/../functions/sql.php";

function blog_SelectAuthentication()
{
    $sql = "SELECT login, password FROM authentication";
    return sql_Query($sql);
}

function blog_InsertItems()
{
    $sql = "SELECT * FROM article";
    return sql_QueryArticl($sql);
}

function blog_Insert($postName, $postData, $postText, $postFile)
{
    $sql = "
        INSERT INTO article
        (articleName, articleData, article, path)
        VALUES
        ('" . $postName . "', '" . $postData . "', '" . $postText . "', '" . $postFile . "')
    ";
    sql_Insert($sql);
}

function blog_SelectAdminList()
{
    $sql = "SELECT id, articleName, articleData, path FROM article";
    return sql_QueryArticl($sql);
}

function blog_Delete($id)
{
    $sql = "
            DELETE FROM article
            WHERE id='" . $id . "'
            ";
    sql_Delete($sql);
}

function blog_SelectArticle($id)
{
    $sql = "SELECT * FROM article WHERE id='" . $id . "'";
    return sql_QueryArticl($sql);
}

function blog_Update($postName, $postData, $postText, $postId)
{
    $sql = "
        UPDATE article
        SET articleName='" . $postName . "', articleData='" . $postData . "', article='" . $postText . "'
        WHERE id='" . $postId . "'
        ";
    sql_Update($sql);
}

function blog_UpdateAndFile($postName, $postData, $postText, $postFile, $postId)
{
    $sql = "
        UPDATE article
        SET articleName='" . $postName . "', articleData='" . $postData . "', article='" . $postText . "', path='" . $postFile . "'
        WHERE id='" . $postId . "'
        ";
    sql_UpdateAndFile($sql);
}