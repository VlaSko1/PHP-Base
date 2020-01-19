<?php

// Файл констант
define("ROOT", dirname(__DIR__));
define('PUBLIC_DIR', $_SERVER['DOCUMENT_ROOT'] . '/');
define('TEMPLATES_DIR', PUBLIC_DIR . '../templates/');
define('ENGINE_DIR', PUBLIC_DIR . "../engine/");
define('LAYOUTS_DIR', 'layouts/');

// DB config
define('HOST', 'localhost:3306');
define('USER', 'geek');
define('PASS', '12345');
define('DB', 'shop2');

// Подключаем основные функции-модули нашего приложения
include ROOT . "/engine/db.php";
include ROOT . "/engine/core.php";
include ROOT . "/engine/security.php";

autoload("controllers");
autoload("models");


