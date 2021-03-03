<?php

const CONSTANTE = "Isso é uma constante";

$nome = "Fulano";

$ano = date("Y");
$idade = 16;
$dataNascimento = $ano - $idade;

/**
 * Exibir na pagina o nome do usuário
 * e o seu ano de nascimento
 * 
 * Exemplo: Olá, Fulano de tal, você nasceu em 1988
 */

 echo "<h1>Olá, $nome, você nasceu em $dataNascimento.</h1>";

 echo date("D/M/Y");
 echo " <---------ou---------> ";
 echo date("d/m/y");