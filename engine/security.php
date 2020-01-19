<?php
function check($date) {
    return (string)htmlspecialchars(strip_tags($date));
}