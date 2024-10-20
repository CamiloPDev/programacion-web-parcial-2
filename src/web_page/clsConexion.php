<?php

class ConexionMysql{
    private $host;
    private $user;
    private $password;
    private $database;
    private $conn;

    public function __construct(){
        require_once "config_BD.php";
        $this-> host = HOST;
        $this-> user = USER;
        $this-> password = PASSWORD;
        $this-> database = DATABASE;
    }

    public function CrearConexion(){
        $this-> conn = new mysqli($this->host,$this->user,$this->password,$this->database);
        if($this->conn->connect_errno){
            die("Error al conectarse a MYSQL: (" .$this->conn->connect_errno . ")" . $this->connect_error);

        }else{
            echo "Conexión Exitosa";
        }
    }
    public function CerrarConexion(){
        $this->conn->close();
    } 
    
    public function EjecutarSQL($sql){
        $result = $this->conn->query($sql);//Ejecuta el sql que recibe
        return $result;
    }

    public function ObtenerColumnasAfectadas(){
        return $this->conn->affected_rows;
    }

    public function ObtenerFilas($result){
        return $result->fetch_row();
    }



}
?>
