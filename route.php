<?php
require_once "app/controller/ControladorAeronave.php";
require_once "app/controller/Controladorvuelos.php";
require_once "app/controller/LoginController.php";



// definimos la base url de forma dinamica
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    
    if (empty($_GET['action'])) {       
        $_GET['action'] = 'login';
    }
   
    $action = $_GET['action'];
    $parametro = explode('/', $action);
    
    $controller_Aeronave = new Controlador_Aeronave();
    $controller_vuelos = new Controlador_vuelos();
    $controller_locgin = new login();

    //  print_r($parametro);

    switch ($parametro[0]) {
        case 'login':
            $controller_locgin->login();
            break;

        case 'home':
            $controller_locgin->Homepage();
            break;

        case 'Tabla':
             $controller_Aeronave->Show_Admin_noadmin_table();
            break;

        case 'insert_vuelo':
            $controller_vuelos->insert_vuelo();
             break;
        
        case 'Verdatos':
            $controller_vuelos->Mostrar_tabla_de_vuelos();
            break; 
        case 'Verify_login':
            $controller_locgin->Verify_login();
                break;           
            
        case 'eliminarAeronave':
            $controller_Aeronave->eliminarAeronave($parametro[$id]);
                break;           
                    
    
                              
            
        default:
          echo "404 not found";
    }