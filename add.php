<?php
$data = json_decode(file_get_contents('php://input'));

$operand1 = (int) $data -> operator1;
$operand2 = (int) $data -> operator2;

    header("Content-type: application/json");
	$response = [
	    'result' => $operand1+$operand2
	];
	echo json_encode($response);