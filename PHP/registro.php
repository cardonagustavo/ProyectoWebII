
<?php

include 'conexion.php';
//Recibir datos

$correo = $_POST['correo'];
$password = $_REQUEST['password'];
$passwordHash1 = password_hash($password, PASSWORD_BCRYPT);


$sql = "INSERT INTO usuarios VALUES (null, '$correo', '$passwordHash1')";

$conectar->query($sql);

header('location: ../index.html');
?> 