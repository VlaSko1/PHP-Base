<?php
function getProductsCatalog() {
    return getAssocResult("SELECT * FROM goods ORDER BY views DESC");
}
function getOneProduct($id) {
    $result = getAssocResult("SELECT * FROM goods WHERE id={$id}");
    return $result[0];

}
function addProductView($id) {
    executeQuery("UPDATE goods SET views=views+1 WHERE id={$id}");
}