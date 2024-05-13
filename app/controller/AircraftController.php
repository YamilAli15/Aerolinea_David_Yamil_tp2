<?php 

require_once "app/view/AvionesView.php";
require_once "app/model/AerolíneasModel.php";

class AircraftTable{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new AerolíneasModel();
        $this->view = new planes();
 
        
          
    }


    function Showplanes(){
        $tareas = $this->model->getAllTasks();
        $this->view->AvionesView($tareas);
    }

    function showTask($id){
        $tarea = $this->model->getTask($id);
        $this->view->AvionesView($tarea);
        
    }

    function deleteTask($id){
        $this->model->delete($id);
        header("Location:".BASE_URL."tasks");
    }
      

    function finalizeTask($id){
        $this->model->finalize($id);
        header("Location:".BASE_URL."tasks");
    }

}