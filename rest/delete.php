<?php
$requestMethod = $_SERVER["REQUEST_METHOD"];
include('api/Rest.php');
$api = new Rest();

switch ($requestMethod) {
    case 'GET':
        $wstId = isset($_GET['id']) ? $_GET['id'] : '';
        $api->deleteWisata($wstId);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
?>