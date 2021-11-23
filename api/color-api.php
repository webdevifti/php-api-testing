<?php

header('Content-type: applicaton/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents('php://input'), true);

require '../db.php';
require '../functions.php';

if($colors = getColor()){
    echo json_encode($colors);
}else{
    echo json_encode(array('message' => "No Data Found", 'status'=> false));
}



?>