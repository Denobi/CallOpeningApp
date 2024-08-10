<?php


define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'dbchamados');

$conn = new mysqli(HOST,USER,PASS,BASE);

//Verificador de Conexão
if ($conn->connect_error) {
    echo "Erro na conexão: " . $conn->connect_error;
}

