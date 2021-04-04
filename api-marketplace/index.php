<?php
//// CORS : /////
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');

require_once "controllers/route.controller.php";

$index = new RoutesController(); //Instancio todo RoutesController
$index -> index(); //Ejecuto el index()
