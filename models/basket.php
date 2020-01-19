<?php
function deleteFromBasket($id) {
    $id = (int)$id;
    $session = session_id();
    // Делаем проверку сессии товара который собираемся удалить в текущей сессии
    $basketSession = getAssocResult("SELECT session_id, quantity FROM basket WHERE id='{$id}'")[0];

    if ($session == $basketSession['session_id']) {
        if ($basketSession['quantity'] > 1) {
            return executeQuery("UPDATE basket SET quantity=quantity-1 WHERE basket.id = {$id}");
        } else {
            return executeQuery("DELETE FROM basket WHERE basket.id = {$id}");
        }
    }
}

function getSummBasket() {
    $session = session_id();
    return getAssocResult("SELECT SUM(basket.quantity * goods.price) as sum FROM basket, goods WHERE basket.good_id=goods.id AND 
    session_id='{$session}'")[0]['sum'];
}

function getBasket() {
    $session = session_id(); // получаем текущую сессию
    return getAssocResult("SELECT basket.id basket_id, basket.quantity quantity, goods.image, goods.id goods_id,
    goods.name, goods.description, goods.price FROM basket, goods WHERE basket.good_id=goods.id AND 
    session_id='{$session}'");
}


function addGoodBasket($id) {
    $id = (int)$id;
    $session = session_id();
    $resultRequest = getAssocResult("SELECT * FROM basket WHERE good_id='{$id}' AND session_id='{$session}'");
    if (!empty($resultRequest)) {
        return executeQuery("UPDATE basket SET quantity=quantity+1 WHERE basket.good_id ='{$id}' AND session_id='{$session}'");
    } else {
        return executeQuery("INSERT INTO basket (good_id, session_id) VALUES ('{$id}', '{$session}')");
    }
}

function getBasketCount() {
    $session = session_id();
    return getAssocResult("SELECT SUM(quantity) as count FROM `basket` WHERE `session_id`='{$session}'")[0]['count'];
}
function getQuantityGood($id){
    $session = session_id();
    return getAssocResult("SELECT quantity FROM basket WHERE id='{$id}' AND `session_id`='{$session}'")[0]['quantity'];
}


