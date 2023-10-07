<?php

    $servidor = 'localhost';
    $BD = 'proyecto';
    $usuario = 'root';
    $password = '';

    $conectar = new PDO("mysql: server=$servidor; dbname=$BD", $usuario, $password);

    echo "conecta";


?>