<?php
require_once "app/model/Model.php";

class AerolíneasModel extends Model{

    function getAllTasks(){
        //abrimos la conexion;
        $db = $this->createConexion();
       
        //Enviar la consulta
        $sentencia = $db->prepare("SELECT * FROM aerolineas_argentinas");
        $sentencia->execute();
        $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $usuarios;
    }
    
    function insertTask($nombre, $descr, $prioridad){
        //abrimos la conexion;
        $db = $this->createConexion();
       
        //Enviar la consulta
        $resultado= $db->prepare("INSERT INTO aerolineas_argentinas (nombre, descripcion, prioridad) VALUES (?,?,?)");
        $resultado->execute([$nombre, $descr, $prioridad]); // ejecuta
    }
    
    
    function delete($id){
        $db = $this->createConexion();
        $resultado= $db->prepare("DELETE FROM aerolineas_argentinas WHERE id = ?");
        $resultado->execute([$id]); // ejecuta
    }
    
    function finalize($id){
        $db = $this->createConexion();
        $resultado= $db->prepare("UPDATE aerolineas_argentinas SET finalizada = ? WHERE id = ?");
        $resultado->execute([1,$id]); // ejecuta
    }
    
    function getTask($id){
        //abrimos la conexion;
        $db = $this->createConexion();
       
        //Enviar la consulta
        $sentencia = $db->prepare("SELECT * FROM aerolineas_argentinas WHERE id = ?");
        $sentencia->execute([$id]);
        $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tarea;
    }
}