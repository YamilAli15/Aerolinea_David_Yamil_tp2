<?php
require_once "app/controller/AircraftController.php";
require_once "app/view/HomeView.php";
require_once "app/view/LoginView.php";
require_once "app/controller/ModifyAirplanesController.php";



// definimos la base url de forma dinamica
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    
    if (empty($_GET['action'])) {       
        $_GET['action'] = 'login';
    }
   
    $action = $_GET['action'];
    $parametro = explode('/', $action);
    
    $controllerAirvaft = new AircraftTable();

    $controllerHome = new Home();

    $controllerlogin =  new login();

    $controllerModifyAirplanes = new ModifyAirplanesController();
    //  print_r($parametro);

    switch ($parametro[0]) {
        case 'login':
            $controllerlogin->login();
            break;

        case 'home':
           $controllerHome->Homepage();
            break;

        case 'TablaDeVuelos':
             $controllerAirvaft->Showplanes();
            break;

    
         case 'ModificarLaTabla':
           $controllerModifyAirplanes->ModifyAirplane();
            break;


        default:
          echo "404 not found";
    }