<?php
function getProductsCatalog() {
    return getAssocResult("SELECT * FROM products ORDER BY likes DESC");
}