<?php
include("config.php");

//$titulo = $_REQUEST['titulo'];
//$descricao = $_REQUEST['descricao'];



try {

    $pdo = connect();
    //insere na BD
    $sql = "SELECT * FROM Items";

    $query = $pdo->prepare($sql);
    $query->bindParam(':item_order', $i, PDO::PARAM_INT);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $lista = $query->fetchAll();
    //$vetor[] = array_map('utf8_encode', $resultado);
    echo json_encode($lista);
} catch (PDOException $e) {
    //retorna 0 para no sucesso do ajax saber que foi um erro
    echo "0";
}



