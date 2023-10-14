
<?php

include 'conexion.php';
//Recibir datos

$correo = $_POST['correo'];
$password = $_REQUEST['password'];
$passwordHash1 = password_hash($password, PASSWORD_BCRYPT);


//$sql = "INSERT INTO usuarios VALUES (null, '$correo', '$passwordHash1')";

//$sql = "INSERT INTO usuarios VALUES (null, '$correo', '$passwordHash1')";


$enviar = $conectar->prepare("INSERT INTO usuarios 
VALUES (null, :email, :contrase)");

$enviar->bindParam('email', $correo);
$enviar->bindParam('contrase', $passwordHash1);

//$enviar ->execute();
//$correo ="Ejemplo5@ejemplo9.com";
//$passwordHash1 = "123456";

//$enviar ->execute(array($correo, $passwordHash1));   //Es mas seguro 
//$enviar ->execute([$correo, $passwordHash1]); el navegador lo interpreta como array.

$enviar ->execute();
header('location: ../index.html');

?> 
