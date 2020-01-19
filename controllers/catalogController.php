<?php

function catalogController(&$params, $action, $id) {

    if(empty($action)) $action = 'catalog';

    switch ($action) {
        case 'catalog':
            $params['resultProducts'] = getProductsCatalog();
            break;
        case 'product' :
            addProductView($id);
            $params['resultProduct'] = getOneProduct($id);
            break;
    }

    $templateName = '/catalog/' . $action;

    return render($templateName, $params);
}