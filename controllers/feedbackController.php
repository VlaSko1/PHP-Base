<?php

function feedbackController(&$params, $action) {
    doFeedbackAction($params, $action);

    $params['feedback'] = getAllFeedback();
    $templateName = 'feedback';
    return render($templateName, $params);
}