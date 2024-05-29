<?php
require_once "app/model/Model.php";

class Administrador_tabla_de_aviones extends Model{ //extension del model 

    function datos_de_tabla_de_Aeronave(){ // tabla general de todos los vuelos 
    
        $db = $this->createConexion();
       
      
        $sentencia = $db->prepare("SELECT * FROM aerolineas_argentinas");
        $sentencia->execute();
        $vuelos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $vuelos;
    }
    
    
    
    function eliminar_Aeronave($id){
        $db = $this->createConexion();
        $eliminado= $db->prepare("DELETE FROM aerolineas_argentinas WHERE id = ?");
        $eliminado->execute([$id]); // ejecuta
    }
    
    
    
    function datos_de_un_vuelo($id){
        //abrimos la conexion;
        $db = $this->createConexion();
       
        //Enviar la consulta
        $sentencia = $db->prepare("SELECT * FROM aerolineas_argentinas WHERE id = ?");
        $sentencia->execute([$id]);
        $vuelos = $sentencia->fetch(PDO::FETCH_OBJ);
        return $vuelos;
    }
}