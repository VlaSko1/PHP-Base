<?php
function getOneProduct($id) {
    $result = getAssocResult("SELECT * FROM products WHERE id={$id}");
    return $result[0];
}
function addProductView($id) {
    executeQuery("UPDATE products SET likes=likes+1 WHERE id={$id}");
}