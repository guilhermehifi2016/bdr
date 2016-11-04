<?php
include("config.php");

$titulo = $_REQUEST['titulo'];
$descricao = $_REQUEST['descricao'];

if ($titulo != '' and $descricao != '') {

    try {

        $pdo = connect();
        //insere na BD
        $sql = "INSERT INTO prova.items (title, description) VALUES('" . trim($titulo) . "','" . trim($descricao) . "')";

        $query = $pdo->prepare($sql);
        $query->bindParam(':item_order', $i, PDO::PARAM_INT);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        //$list = retorna();
    } catch (PDOException $e) {
        //retorna 0 para no sucesso do ajax saber que foi um erro
        echo "0";
    }
} else {

    echo "0";
}


