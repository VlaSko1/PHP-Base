<?php
function authController(&$params, $action) {
    if ($action == 'logout') {
        session_destroy();
        setcookie("hash", "", time() - 36000, '/');
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    if ($action == 'login') {
        $login = check($_POST['login']);
        $pass = check($_POST['pass']);
        if (!auth($login, $pass)) {
            Die("Неверный логин и/или пароль");
        } else {
            if (isset($_POST['save'])) {
                updateHash();
            }
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }
}