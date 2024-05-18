<?php 

require_once "app/view/AircraftModificationView.php";
require_once "app/model/AerolíneasModel.php";


class ModifyAirplanesController{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new AerolíneasModel();
        $this->view = new ModifyAirplane();
 
        
          
    }

    function ModifyAirplane(){
        $tareas = $this->model->getAllTasks();
        $this->view->ModifyAirplane($tareas);
    }
    function showflight($id){
        $tarea = $this->model->getTask($id);
        $this->view->ModifyAirplane($tarea);
        
    }
    function deleteflight($id){
        $this->model->delete($id);
        header("Location:".BASE_URL."tasks");
    }
    function newflight(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['nombre']) && !empty($_POST['Destino'])&& !empty($_POST['Escala']) &&  !empty($_POST['Precio']) && !empty($_POST['fecha'])
            ){
                $nombre = $_POST['nombre'];
                $Destino = $_POST['Destino'];
                $Escala= $_POST['Escala'];
                $Precio= $_POST['Precio'];
                $fecha= $_POST['fecha'];
                $this->model->insertTask($nombre, $Destino, $Escala,$Precio,$fecha);
                header("Location:".BASE_URL."tasks");             

            }else{
                echo("Faltan datos");   
            }
        }
    }
}