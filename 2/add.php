<?php
// Блок функций
function sum ($a, $b = 0) {
    return $a + $b;
}
function sub ($a, $b = 0) {
    return $a - $b;
}
function mul ($a, $b = 1) {
    return $a * $b;
}
function div ($a, $b) {
    if ($b == 0) {
        return "Ошибка: на ноль делить нельзя!";
    }
    return round($a / $b, 4);
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'sum':
            return sum($arg1, $arg2);
        case 'sub':
            return sub($arg1, $arg2);
        case 'mul':
            return mul($arg1, $arg2);
        case 'div':
            return div($arg1, $arg2);
        default:
            return "Для выполнения вычислений введите знак арифметической операции (+, -, *, /).";
    }
}

$data = json_decode(file_get_contents('php://input'));

    $operand1 = (int) $data -> operator1;
    $operand2 = (int) $data -> operator2;
    $operation = (string) htmlspecialchars(strip_tags($data -> operation));

    $result = mathOperation($operand1, $operand2, $operation);

$operand1 = (int) $data -> operator1;
$operand2 = (int) $data -> operator2;
$operation = (string) htmlspecialchars(strip_tags($data -> operation));


$result = mathOperation($operand1, $operand2, $operation);

    header("Content-type: application/json");
	$response = [
	    'result' => $result
	];
	echo json_encode($response);
