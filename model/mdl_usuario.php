<?php
require("../conection/db_con.php");

function usuario_listar($conexao)
{
    $sql = "SELECT id, nome, idade FROM usuario ORDER BY nome";
    $resultado = mysqli_query($conexao, $sql);

    return $resultado;
}

function usuario_porId($conexao, $id)
{
    $sql = sprintf("SELECT id, nome, idade FROM usuario WHERE id = %s", $id);
    $resultado = mysqli_query($conexao, $sql);

    return $resultado;
}
