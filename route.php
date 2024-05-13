<?php
require_once "app/controller/AircraftController.php";
require_once "app/view/HomeView.php";
require_once "app/controller/ModifyAirplanesController.php";



// definimos la base url de forma dinamica
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    
    if (empty($_GET['action'])) {       
        $_GET['action'] = 'home';
    }
   
    $action = $_GET['action'];
    $parametro = explode('/', $action);
    $controllerAirvaft = new AircraftTable();
    $controllerHome = new Home();
    $controllerModifyAirplanes = new ModifyAirplanesController();
    //  print_r($parametro);
    switch ($parametro[0]) {
        case 'home':
            $controllerHome->Homepage();
            break;

        case 'TablaDeVuelos':
            $controllerAirvaft->Showplanes();
            // $controller->newTask();
            break;

        case 'ModificarLaTabla':
            $controllerModifyAirplanes->ModifyAirplane();
            break;

    
         case 'finalize':
            $controller->finalizeTask($parametro[1]);
            break;

        case 'show':
            $controller->showTask($parametro[1]);
            break;

        default:
          echo "404 not found";
    }