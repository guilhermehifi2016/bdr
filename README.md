
Questão 1 

Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.

Solução:

<?php


function multiplo($i = 1)
{

    for ($i = 1; $i <= 100; $i++) {

        if (($i % 3 == 0) and ( $i % 5 == 0)) {
            echo "FizzBuzz</br>";
        } elseif ($i % 5 == 0) {
            echo "Buzz</br>";
        } elseif ($i % 3 == 0) {
            echo "Fizz</br>";
        } else {
            echo $i;
        }
    }
}
$escrever = multiplo();

echo $escrever;

Questão 2 -"

Refatore o código abaixo, fazendo as alterações que julgar necessário.

<?
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
} elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
}
Solução:

<?php

function redir_google()
{
    header("Location: http://www.google.com");
    exit();
}
if (isset($_SESSION['loggedin']) || isset($_COOKIE['Loggedin'])) {
    if (isset($_COOKIE['Loggedin']))
        $_SESSION['loggedin'] = $_COOKIE['Loggedin'];

    redir_google();
} else {
    redir_google();
}


Questão 3 -

Refatore o código abaixo, fazendo as alterações que julgar necessário.

<?php

class MyUserClass
{
    public function getUserList()
    {
        $dbconn = new DatabaseConnection('localhost','user','password');
        $results = $dbconn->query('select name from user');

        sort($results);

        return $results;
    }
}

Solução:

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


Questão 4

Desenvolva uma API Rest para um sistema gerenciador de tarefas (inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por prioridade. Desenvolver utilizando:

• Linguagem PHP (ou framework CakePHP);

• Banco de dados MySQL;

Diferenciais:

• Criação de interface para visualização da lista de tarefas;

• Interface com drag and drop;

• Interface responsiva (desktop e mobile);

Solução:

Para o exercício 4 é necessário a inclusão do banco de dados que se encontra na raiz do projeto

dump.sql

depois basta executar a pasta diretamento no diretorio do apache.



