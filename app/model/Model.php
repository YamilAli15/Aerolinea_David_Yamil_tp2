<?php
require_once "config.php";

class Model{

    protected $conexion;

    public function __construct(){
        $this->conexion = $this->createConexion();
        $this->deploy();
    }

    public function createConexion(){
      
        try{
            $db = new PDO("mysql:host=".MYSQL_HOST.";dbname=".MYSQL_DB.";charset=utf8", MYSQL_USER, MYSQL_PASS);
    
        }catch(Exception $e){
            var_dump($e);
        }
    
        return $db;
    }


  private function deploy() {
        $query = $this->conexion->query('SHOW TABLES');
        $tables = $query->fetchAll();
        if(count($tables) == 0) {
            $sql = "
            
            CREATE TABLE `aerolineas_argentinas` (
                `ID` int(11) NOT NULL,
                `Aeronave` varchar(100) NOT NULL,
                `Destino` varchar(100) NOT NULL,
                `Escala` varchar(100) NOT NULL,
                `Precio` float NOT NULL,
                `Fecha` datetime NOT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
            
            
            
        CREATE TABLE `vuelos` (
            `ID_Destino` int(11) NOT NULL,
            `Destino` varchar(100) NOT NULL,
            `Escala` int(11) NOT NULL,
            `id_aerolinea` int(11) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
            

        ALTER TABLE `aerolineas_argentinas`
  ADD PRIMARY KEY (`ID`);

        ALTER TABLE `vuelos`
        ADD PRIMARY KEY (`ID_Destino`),
        ADD KEY `FK_VUELO_AEROLINEA` (`id_aerolinea`);

        ALTER TABLE `aerolineas_argentinas`
        MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

        ALTER TABLE `vuelos`
        MODIFY `ID_Destino` int(11) NOT NULL AUTO_INCREMENT;

        ALTER TABLE `vuelos`
        ADD CONSTRAINT `FK_VUELO_AEROLINEA` FOREIGN KEY (`id_aerolinea`) REFERENCES `aerolineas_argentinas` (`ID`);
        COMMIT;
                    
            
            ";
              


        $this->conexion->query($sql);
    }
    }


}