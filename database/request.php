<?php
require_once('product_db.php');
if ($_SERVER['REQUEST_METHOD'] != 'GET'){
    $data = array();
    $data['code'] = 2;
    $data['message'] = 'This method is not supported:'.$_SERVER['REQUEST_METHOD'];

    http_response_code(405);
    die(json_encode($data));
}
?>