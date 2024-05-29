
<?php
require_once "libs/Smarty.class.php";
// La View es una sola porque nos concentramos en el backin No sé si está bien dicho 😅


class AvionesView { 
  private $smarty;
   
 
  function __construct(){
    
    $this->smarty = new Smarty();
    
  }function Error($msj = null){
  $this->smarty->assign("base", BASE_URL);
  $this->smarty->assign("msj", $msj);
  $this->smarty->display('error.tpl');
  }

  function login($msj = null){

    $this->smarty->assign("base", BASE_URL);
    $this->smarty->display('NavigationBar.tpl');
    $this->smarty->assign("msj", $msj);
    $this->smarty->display('login.tpl');
 }

  function Homepage(){
    
    
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->display('NavigationBar.tpl');
    $this->smarty->display('Home.tpl');
}


    function Editar_tabla_de_Aeronave($Aeronave){
      
      $this->smarty->assign("base", BASE_URL);
      $this->smarty->assign('cantidad',count($Aeronave));
      $this->smarty->assign('Aeronave',$Aeronave);
      $this->smarty->display('AeronaveTablesAdmi.tpl');
    

  
  }

  function Editar_tabla_de_vuelos($vuelos){
      
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign('cantidad',count($vuelos));
    $this->smarty->assign('vuelos',$vuelos);
    $this->smarty->display('vuelosTablesAdmi.tpl');
  


}






  function tabla_de_vuelos($Aeronave){
    
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign('cantidad',count($Aeronave));
    $this->smarty->assign('Aeronave',$Aeronave);
    $this->smarty->display('AeronaveTables.tpl');
  }
    
  function tabla_de_Aeronave($Aeronave){
    
     $this->smarty->assign("base", BASE_URL);
     $this->smarty->assign('cantidad',count($Aeronave));
     $this->smarty->assign('Aeronave',$Aeronave);
     $this->smarty->display('AeronaveTables.tpl');
  }
  
  function tabla_de_vuelo($vuelos){
    
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign('cantidad',count($vuelos));
    $this->smarty->assign('vuelos',$vuelos);
    $this->smarty->display('vuelosTables.tpl');

 }
  }


    ?>
  
