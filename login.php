<?php

require_once __DIR__ . "/models/blog.php";

if (!empty($_POST)) {
    if ((!empty($_POST["login"]) && $_POST["login"] !== " ") && (!empty($_POST["password"] && $_POST["password"] !== " "))) {
        $login = trim(strip_tags($_POST["login"]));
        $password = trim(strip_tags($_POST["password"]));

        $resLoginPassword = blog_SelectAuthentication();
        if (false !== $resLoginPassword) {
            if (($login == $resLoginPassword['login']) && ($password == $resLoginPassword['password'])) {
                session_start();
                $_SESSION['userInfo'] = $resLoginPassword;
                header('Location: /php-blog/admin.php');
            } elseif (($login == $resLoginPassword['login']) && ($password !== $resLoginPassword['password'])) {
                $error = 'Логин правильный. Пароль не правильный!';
            } elseif (($login !== $resLoginPassword['login']) && ($password == $resLoginPassword['password'])) {
                $error = 'Пароль правильный. Логин неправильный!';
            } else {
                $error = 'Неправильные данные!';
            }
        }
    }
}

require_once __DIR__ . '/views/login.php';