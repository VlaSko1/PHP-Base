<?php
function apiController($params, $action) {
    if ($action == 'buy') {
        $id = check($_GET['id']);
        $err = addGoodBasket($id);
        echo json_encode(['id' => $id, 'count' => getBasketCount(), 'err' => $err]);
        die();
    }
    if ($action == 'delete') {
        $id = check($_GET['id']);
        $err = deleteFromBasket($id);
        echo json_encode(['summ' => getSummBasket(), 'id' => $id, 'count' => getBasketCount(),
            'quantity' => getQuantityGood($id), 'err' => $err]);
        die();
    }
}