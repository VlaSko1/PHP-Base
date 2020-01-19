<?php
function basketController(&$params, $action, $id='') {
    $params['message'] = doOrderAction($params, $action);
    if(empty($action)) $action = 'basket';

    switch ($action) {
        case 'basket':
            $params['basket'] = getBasket();
            $params['summ'] = getSummBasket();

            break;
    }

    $templateName = '/basket/' . $action;

    return render($templateName, $params);
}