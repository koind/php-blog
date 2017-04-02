<?php

function filePath($fileName)
{
    $files = $_FILES[$fileName];
    $filesPath = __DIR__ . '\..\views\img\\' . $files['name'];
    $filePathReturn = 'views/img/' . $files['name'];

    if (0 == $files['error'] ) {
        move_uploaded_file($files['tmp_name'], $filesPath);
        return $filePathReturn;
    }
}