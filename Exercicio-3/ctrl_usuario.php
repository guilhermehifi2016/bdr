<?php


function listarDados($conexao)
{
    $resultado = usuario_listar($conexao);
    $data = array();

    while ($row = mysqli_fetch_array($resultado)) {
        $data[] = array("id" => $row['id'], "nome" => utf8_encode($row['nome']), "idade" => ($row['idade'] == "") ? "--" : $row['idade']);
    }

    return $data;
}


