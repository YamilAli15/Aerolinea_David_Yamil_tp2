<?php 

require_once "app/view/AvionesView.php";
require_once "app/model/vuelosmodel.php";

class Controlador_vuelos{

    private $model;
    private $view;
    


    public function __construct()
    {
        $this->model = new Administrador_tabla_de_vuelos();
        $this->view = new AvionesView();   
    }
    
    public function checkLogged() {
        if (session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
        if (!isset($_SESSION['IS_LOGGED'])) {
            header('Location: ' . BASE_URL . "login");
        
        } else{

            return true;
        } 
    }

    function Mostrar_tabla_de_vuelos(){
        if($this->checkLogged()){//si checkea
          $vuelos = $this->model->datos_de_tabla_de_vuelos();
          if($_SESSION['ROLE']){
             $this->view->tabla_de_vuelo($vuelos);
            }else
            {
             $this->view->Editar_tabla_de_vuelos($vuelos);
            }
       } 
    }
    function ver_un_vuelo($id){
        $tarea = $this->model->datos_de_un_vuelo($id);
        $this->view->tabla_de_Aeronave($tarea);
        
    }
    function eliminar_vuelos($id){
        $this->model->eliminar_vuelo($id);
        header("Location:".BASE_URL."tasks");
    }
    function insert_vuelo(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['Destino']) && !empty($_POST['Pilotos'])
                       && !empty($_POST['id_aerolinea'])
            ){
              
                $Destino = $_POST['Destino'];
                $Precio= $_POST['Pilotos'];
                $id_aerolinea = $_POST['id_aerolinea'];
                $this->model->insert_vuelo($Destino,$Precio,$id_aerolinea);
                header("Location:".BASE_URL."TablaDeVuelos");             

            }else{
                $this->view->Error("Faltan datos");   
            }
        }
    }
}