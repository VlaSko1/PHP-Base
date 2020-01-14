<?php
function getAllFeedback() {
    $sql = "SELECT * FROM feedback ORDER BY id DESC";
    return getAssocResult($sql);
}
function addFeedback($name, $message) {
    executeQuery("INSERT INTO feedback (name, message) VALUES (\"{$name}\", \"{$message}\")");
}
function deleteFeedback($id) {
    executeQuery("DELETE FROM feedback WHERE id={$id}");
}
function editFeedback($id, $name, $message) {
    executeQuery("UPDATE feedback SET name='{$name}', message='{$message}'  WHERE id={$id}");
}

function doFeedbackAction(&$params, $action) {
    $params['buttonText'] = "Отправить";
    if ($action == 'add') {
        $name = $_POST['name'];
        $message = $_POST['message'];
        $id = $_POST['id'];
        if ($_POST['id'] == '') {
            addFeedback($name, $message);
            header("Location: /feedback/?message=OK");
        } else {
            editFeedback($id, $name, $message);
            header("Location: /feedback/?message=edit");
        }
    }
    if ($action == 'delete') {
        $id = (int) $_GET['id'];
        deleteFeedback($id);
        header("Location: /feedback/?message=delete");
        $params['message'] = "Отзыв удален!";
    }
    if ($action == 'edit') {
        $id = (int) $_GET['id'];
        $row = getAssocResult("SELECT * FROM feedback WHERE id={$id}");
        $params['buttonText'] = "Изменить";
        $params['valueId'] = $row['0']['id'];
        $params['valueName'] = $row['0']['name'];
        $params['valueMessage'] = $row['0']['message'];

    }

    if ($_GET['message'] == 'OK') $params['message'] = "Отзыв добавлен!";
    if ($_GET['message'] == 'delete') $params['message'] = "Отзыв удален!";
    if ($_GET['message'] == 'edit') $params['message'] = "Отзыв изменен!";

}