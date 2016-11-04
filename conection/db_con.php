<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "admin";
$db_name = "prova";

$conexao = @mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno($conexao)) {
    echo "A conexão falhou, erro reportado: " . mysqli_connect_error();
    exit();
}