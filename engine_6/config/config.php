<?php

// Файл констант
define('PUBLIC_DIR', $_SERVER['DOCUMENT_ROOT'] . '/');
define('TEMPLATES_DIR', PUBLIC_DIR . '../templates/');
define('ENGINE_DIR', PUBLIC_DIR . "../engine/");
define('LAYOUTS_DIR', 'layouts/');

// DB config
define('HOST', 'localhost:3306');
define('USER', 'geek');
define('PASS', '12345');
define('DB', 'geekbrains2');

// Подключаем основные функции-модули нашего приложения
include ENGINE_DIR . "db.php";
include ENGINE_DIR . "functions.php";
include ENGINE_DIR . "feedback.php";
include ENGINE_DIR . "log.php";
include ENGINE_DIR . "gallery.php";
include ENGINE_DIR . "news.php";
include ENGINE_DIR . "catalog.php";
include ENGINE_DIR . "product.php";

