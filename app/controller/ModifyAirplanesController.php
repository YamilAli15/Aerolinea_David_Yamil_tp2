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
    function showTask($id){
        $tarea = $this->model->getTask($id);
        $this->view->ModifyAirplane($tarea);
        
    }
    function deleteTask($id){
        $this->model->delete($id);
        header("Location:".BASE_URL."tasks");
    }
      

    function finalizeTask($id){
        $this->model->finalize($id);
        header("Location:".BASE_URL."tasks");
    }
    function newTask(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['nombre']) && !empty($_POST['descripcion'])&&
            isset($_POST['prioridad']) && $_POST['prioridad'] !== ""
            ){
                $nombre = $_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                $prioridad = $_POST['prioridad'];
                $this->model->insertTask($nombre, $descripcion, $prioridad);
                header("Location:".BASE_URL."tasks");             

            }else{
                echo("Faltan datos");   
            }
        }
    }
}