<?php

/**
 * Created by PhpStorm.
 * User: AdminPS
 * Date: 08.04.2017
 */
abstract class Articles
{
    abstract protected function __construct();

    abstract public function new_SelectAuthentication();
    abstract public function new_SelectItems();
    abstract public function new_Insert($postName, $postData, $postText, $postFile);
    abstract public function new_SelectAdminList();
    abstract public function new_Delete($id);
    abstract public function new_SelectArticle($id);
    abstract public function new_Update($postName, $postData, $postText, $postId);
    abstract public function new_UpdateAndFile($postName, $postData, $postText, $postFile, $postId);
}