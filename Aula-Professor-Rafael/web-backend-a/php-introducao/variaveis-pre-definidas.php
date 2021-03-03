<?php

//var_dump exibe informações sobre a variável, como o tipo, o valor e etc.
//var_dump($_GET);

//_GET e $_POST é um array que recebe os parametros passado pela requisição


$nome = $_GET["nome"];

$idade = $_GET["idade"];

$anoNascimento = 2021 - $idade;

//isset verifica se a variável foi declarada e se o valor é diferente de nulo;
if(!isset ($_GET["fez-aniversario"])){
    $anoNascimento = $anoNascimento - 1;
}

echo "<h1>Olá $nome, você nasceu em $anoNascimento.</h1>";