<?php

class GetController{

    /*=========================
    Peticiones GET sin Filtro
    ============================ */

    public function getData($table){

        $response = GetModel::getData($table);

        $return = new GetController();
        $return -> fncResponse($response, "getData");

    }


    /*=========================
    Peticiones GET con Filtro
    ============================ */

    public function getFilterData($table, $linkTo, $equalTo){

        $response = GetModel::getFilterData($table, $linkTo, $equalTo);

        $return = new GetController();
        $return -> fncResponse($response, "getFilterData");

    }


    /*=========================
    Peticiones GET entre tablas relacionadas sin Filtro
    ============================ */
    public function getRelData($rel, $type){

        $response = GetModel::getRelData($rel, $type);

        $return = new GetController();
        $return -> fncResponse($response, "getRelData");

    }



    /*=========================
    Respuestas del controlador
    ============================ */
    public function fncResponse($response, $method){

        if (!empty($response)){

            $json = array (
                'status' => 200,
                'total' => count($response),
                'result' => $response
            );
            
        }else{

            $json = array (
                'status' => 404,
                'result' => 'Not Found',
                "Method" => $method
            );

        }

        echo json_encode($json,http_response_code($json["status"]));
        return;

    }


}