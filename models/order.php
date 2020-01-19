<?php

//Получаем все заказы
function getOrders($id = '0') {
    if ($id != '0') {
        return getAssocResult("SELECT orders.id id, name, phone, status FROM orders, status_order 
WHERE orders.status_id = status_order.id AND orders.status_id = '{$id}'");
    } else {
        return getAssocResult("SELECT orders.id id, name, phone, status FROM orders, status_order 
WHERE orders.status_id = status_order.id");
    }
}
//Получаем делати одного заказа
function getOrderDetail($id) {
    if(!isAdmin()) return;
    return getAssocResult("SELECT orders.id id, name, phone, orders.status_id as status_id, status FROM orders, status_order 
WHERE orders.status_id = status_order.id AND orders.id = '{$id}' ")[0];
}
// Функция отправляет запрос на добавление заказа в БД
function addOrder($name, $phone, $session) {

    executeQuery("INSERT INTO orders (name, phone, session_id) VALUES (\"{$name}\", \"{$phone}\", \"{$session}\")");
}
// Функция производящая все необходимые операции связанные с добавлением заказа
function doOrderAction(&$params, $action)
{
    if ($action == 'addorder') {
        $session = session_id();
        $name = check($_POST['name']);
        $phone = check($_POST['phone']);
        addOrder($name, $phone, $session);
        session_regenerate_id();
        header("Location: /basket/");
    }
}
// Получаем список всех возможных статусов заказа
function getAllStatus() {
    if(!isAdmin()) return;

    return getAssocResult("SELECT * FROM status_order");
}
// Получаем суммарную стоимость всех товаров в заказе
function getOrderGoodsSum($id) {
    if(!isAdmin()) return;

    $sessionOrder = getAssocResult("SELECT session_id FROM orders WHERE id='{$id}'")[0]['session_id'];
    return getAssocResult("SELECT SUM(goods.price * basket.quantity) as sum FROM basket, goods WHERE 
basket.session_id = '{$sessionOrder}' AND basket.good_id = goods.id")[0];
}
// Получаем общее количество всех товаров в заказе
function getOrderGoosCount($id) {
    if(!isAdmin()) return;

    $sessionOrder = getAssocResult("SELECT session_id FROM orders WHERE id='{$id}'")[0]['session_id'];
    return getAssocResult("SELECT SUM(basket.quantity) as count FROM basket WHERE 
basket.session_id = '{$sessionOrder}'")[0];
}
// Функуция изменяющая статус заказа
function changeStatus($id, $status) {
    if(!isAdmin()) return;
    executeQuery("UPDATE orders SET status_id='{$status}' WHERE id='{$id}'");
}
// Удаление заказа
function delOrder($id) {
    if(!isAdmin()) return;

    executeQuery("DELETE FROM `orders` WHERE id='{$id}'");
}

// Полный список товаров в заказе
function getOrderGoodsData($id) {
    if(!isAdmin()) return;

    $sessionOrder = getAssocResult("SELECT session_id FROM orders WHERE id='{$id}'")[0]['session_id'];
    return getAssocResult("SELECT basket.quantity as quantity, name, image, price  FROM basket, goods WHERE 
basket.session_id = '{$sessionOrder}' AND basket.good_id = goods.id");
}