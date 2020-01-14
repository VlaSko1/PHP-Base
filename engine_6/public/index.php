<?php

//Точка входа в приложение, сюда мы попадаем каждый раз когда загружаем страницу
//Первым делом подключаем файл с константами настроек

include $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";

// Читаем параметры page из url, чтобы определить, какую страницу-шаблон
// хочет увидеть пользователь, по умолчанию это будет index

$url_array = explode("/", $_SERVER['REQUEST_URI']);

// Сделал так же номер новости и добавил логику: передается еще и id и/или действие action
$action = '';
if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
    if (!$url_array[2]== '') {
        if (is_numeric($url_array[2])) {
            $id = (int) $url_array[2];
        } else {
            $action = (string)htmlspecialchars(strip_tags($url_array[2]));
        }
    }
}


// Для каждой страницы готовим массив со своим набором переменных
// для подстановки их в соответствующий шаблон

$params = prepareVariables($page, $id, $action);

echo render($page, $params);



