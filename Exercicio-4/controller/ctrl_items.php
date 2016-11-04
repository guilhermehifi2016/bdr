<?php
include("./model/config.php");

function retorna(){
    
$pdo = connect();
$sql = 'SELECT * FROM items ORDER BY item_order ASC';
$query = $pdo->prepare($sql);
$query->execute();
$list = $query->fetchAll();
    return $list;
}