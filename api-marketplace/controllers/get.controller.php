<?php

class GetController{

    /*=========================
    Peticiones GET sin Filtro
    ============================ */

    public function getData($table){

        $response = GetModel::getData($table);

        if (!empty($response)){

            $json = array (
                'status' => 200,
                'total' => count($response),
                'result' => $response
            );
            
        }else{

            $json = array (
                'status' => 404,
                'result' => 'Not Found'
            );

        }

        
        
        echo json_encode($json,http_response_code($json["status"]));
        return;

    }


    /*=========================
    Peticiones GET con Filtro
    ============================ */

    public function getFilterData($table, $linkTo, $equalTo){

        $response = GetModel::getFilterData($table, $linkTo, $equalTo);

        if (!empty($response)){

            $json = array (
                'status' => 200,
                'total' => count($response),
                'result' => $response
            );
            
        }else{

            $json = array (
                'status' => 404,
                'result' => 'Not Found'
            );

        }

        
        
        echo json_encode($json,http_response_code($json["status"]));
        return;

    }


}