<?php
    include('clsConexion.php');
    $miconexion = new ConexionMysql();
    $miconexion->CrearConexion();

    $id = $_POST['id'];
    $nombre = $_POST['name'];

    $sql = "insert into usuario(id, nombre) values('$id', '$nombre')";
    $result = $miconexion->EjecutarSQL($sql);
?>
