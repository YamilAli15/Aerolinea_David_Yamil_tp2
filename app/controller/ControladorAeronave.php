<?php 

require_once "app/view/AvionesView.php";

require_once "app/model/Aeronavemodel.php";
class Controlador_Aeronave{

    private $model;
    private $view;


    public function __construct()
    {
  
        $this->view = new AvionesView();   
        $this->model = new Administrador_tabla_de_aviones();
          
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
      



   

  

    function Show_Admin_noadmin_table(){ // 
        if($this->checkLogged()){//si checkea
            $Aeronave = $this->model->datos_de_tabla_de_Aeronave();
            if($_SESSION['ROLE']){
                  $this->view->Editar_tabla_de_Aeronave($Aeronave);//lo muestra en la view y te deja modificar la tabla 
            }else
                { 
                  $this->view->tabla_de_Aeronave($Aeronave); //guarda en esa variante para pasarsela a la view
                }   
             
        }else{
             header("Lcation:" . BASE_URL . "login");
            }           
    }
    




  
    function eliminarAeronave($id){
        $this->model->eliminar_Aeronave($id);
        header("Location:".BASE_URL."Tabla");
    }
   
 
}