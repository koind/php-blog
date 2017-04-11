<?php

/**
 * Created by PhpStorm.
 * User: AdminPS
 * Date: 11.04.2017
 * Time: 8:53
 */
class Files
{
    public function filePath($fileName)
    {
        $files = $_FILES[$fileName];
        $filesPath = __DIR__ . '\..\views\img\\' . $files['name'];
        $filePathReturn = 'views/img/' . $files['name'];

        if (0 == $files['error'] ) {
            move_uploaded_file($files['tmp_name'], $filesPath);
            return $filePathReturn;
        }
    }
}