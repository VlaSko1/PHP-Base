<?php
// В случае если пользователь установил галочку "Save" - создаем для него куки с хэшем
function updateHash() {
    $hash = uniqid(rand(), true);
    $id = (int)$_SESSION['id'];
    executeQuery("UPDATE users SET hash = '{$hash}' WHERE users.id = {$id}");
    setcookie("hash", $hash, time() + 36000, '/');
}


// Проверка логина и пароля - авторизация
function auth($login, $pass) {
    $login = mysqli_real_escape_string(getDb(), strip_tags(stripslashes($login))); // защитили входные данные от SQL-иньекций и прочего (безопасный логин).
    $passDb = getAssocResult("SELECT * FROM users WHERE login= '{$login}'")[0];
    if (password_verify($pass, $passDb['pass'])) {
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $passDb['id'];
        return true;
    }
    return false;
}

// Проверка на админа
function isAdmin() {
    $login = $_SESSION['login'];
    $loginDb = getAssocResult("SELECT rights FROM users WHERE login= '{$login}'")[0]['rights'];
    if ($loginDb === 'administrator') {

        return true;
    } else {

        return false;
    }
}

// Проверка наличия авторизованного пользователя (возвращает true, если какой-либо пользователь авторизован
// и false, если пользователь не авторизован).
function isAuth() {
    if (isset($_COOKIE['hash']) && !isset($_SESSION['login'])) {
        $hash = $_COOKIE['hash'];
        $user = getAssocResult("SELECT * FROM users WHERE hash='{$hash}'")[0]['login'];
        if (!empty($user)) {
            $_SESSION['login'] = $user;
        }
    }
    return isset($_SESSION['login']);
}

// Возвращает логин текущего авторизованного пользователя
function getUser() {
    return $_SESSION['login'];
}