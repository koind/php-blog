<?php

class Authentication
{
    public $error;

    public function __construct()
    {
        require_once __DIR__ . "/../models/News.php";

        if (!empty($_POST)) {
            if ((!empty($_POST["login"]) && $_POST["login"] !== " ") && (!empty($_POST["password"] && $_POST["password"] !== " "))) {
                $login = trim(strip_tags($_POST["login"]));
                $password = trim(strip_tags($_POST["password"]));

                $log = new News();
                $resLoginPassword = $log->new_SelectAuthentication();

                if (false !== $resLoginPassword) {
                    if (($login == $resLoginPassword['0']['login']) && ($password == $resLoginPassword['0']['password'])) {
                        session_start();
                        $_SESSION['userInfo'] = $resLoginPassword;
                        header('Location: /php-blog/admin.php');
                    } elseif (($login == $resLoginPassword['0']['login']) && ($password !== $resLoginPassword['0']['password'])) {
                        $this->error = 'Логин правильный. Пароль не правильный!';
                    } elseif (($login !== $resLoginPassword['0']['login']) && ($password == $resLoginPassword['0']['password'])) {
                        $this->error = 'Пароль правильный. Логин неправильный!';
                    } else {
                        $this->error = 'Неправильные данные!';
                    }
                }
            }
        }
    }
}