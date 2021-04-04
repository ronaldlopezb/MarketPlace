<?php

    $routesArray = explode("/", $_SERVER['REQUEST_URI']);
    $routesArray = array_filter($routesArray);

    /*==============================================
    Cuando no se hace ninguna petición a la API
    ===============================================*/

    if (count($routesArray) == 0){

        $json = array (
            'status' => 404,
            'result' => "Not found"
        );
    }else{

        $json = array (
            'status' => 200,
            'result' => $routesArray[1]
        );
    }

    echo json_encode($json,http_response_code($json["status"]));

    return;
 ?>