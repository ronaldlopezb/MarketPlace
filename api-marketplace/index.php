<?php

require_once "controllers/route.controller.php";
$index = new RoutesController(); //Instancio todo RoutesController
$index -> index(); //Ejecuto el index()
