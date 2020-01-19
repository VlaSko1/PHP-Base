<?php
function adminController(&$params, $action, $id) {

    if(empty($action)) $action = 'admin';


    switch ($action) {
        case 'admin':
            if (!empty($_POST) && isAdmin()) {
                $params['orders'] = getOrders(check($_POST['orderSelect']));
            } else {
                $params['orders'] = getOrders();
            }
            $params['statuses'] = getAllStatus();
            break;
        case 'detail' :
            if(!empty($_POST) && isAdmin()) {
                $id = check($_POST['id']);
                $status = check($_POST['select']);
                changeStatus($id, $status);
            }
            if (!empty($_POST['idDel']) && isAdmin()) {
                delOrder(check($_POST['idDel']));
            }
            $params['order'] = getOrderDetail($id);
            $params['statuses'] = getAllStatus();
            $params['orderGoods'] = getOrderGoodsSum($id);
            $params['orderCount'] = getOrderGoosCount($id);
            $params['orderAllGoods'] = getOrderGoodsData($id);
            break;
    }

    $templateName = '/admin/' . $action;

    return render($templateName, $params);
}