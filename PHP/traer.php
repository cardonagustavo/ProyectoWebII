<?php
include "conexion.php";

$sql  =$conectar->query("SELECT * FROM usuarios");

//echo $sql;
while($dato = $sql->fetch()) {
    echo $dato['usuario']. " ".$dato['contraseña']. "<br>";
}

?>