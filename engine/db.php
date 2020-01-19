<?php

/*
 * Функция, осуществляющая соединение с базой данных и возвращающее его
 * static позволяет сохранить состояние и вернуть уже текущее соединение
 * чтобы не делать нового
 */
function getDb() {

    static $db = null;
    if (is_null($db)){
        $db = @mysqli_connect(HOST, USER, PASS, DB) or die("Could not connect: " .
            mysqli_connect_error());
    }

    return $db;
}

// При желании можно закрыть соединение (если уже и вызывать, то после render на главной)
function closeDb() {
    mysqli_close(getDb());
}

/*
 * Обертка для выполнения любого запроса
 * Передаем в параметре текст sql-запроса
 * Возвращаем результат, в основном использовать для
 * операций update и delete, которые не требуют возврата данных
 */
function executeQuery($sql) {

    @mysqli_query(getDb(), $sql) or die(mysqli_error(getDb()));
    // Проверяем произошли ли изменения в строках и если да, то возвращаем true, иначе false.
    return mysqli_affected_rows(getDb()) == 0 ? false : true;
}

/*
 * Обертка для выполнения запроса на получение данных
 * Данные возвращаются в виде ассоциативного массива
 * Цикл по получению данных уже реализован в этой функции
 */
function getAssocResult($sql) {
    $db = getDb();
    $result = @mysqli_query($db, $sql) or die(mysqli_error($db));
    $array_result = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $array_result[] = $row;
    }

    return $array_result;
}