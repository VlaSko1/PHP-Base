<?php

function indexController(&$params, $action) {

    $templateName = 'index';
    //$params['name'] = 'Вася';
    return render($templateName, $params);
}