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

}