<?php

const VALOR_PEDAGIO = 9.40;
const VALOR_KM = 6;

$nomeCidadeOrigem = $_GET["origem"];

$nomeCidadeDestino = $_GET["destino"];

$kmEntreCidades = $_GET["Km"];

$quantidadePedagio = $_GET["quantidadePedagio"];

$valorCadaPedagios = VALOR_PEDAGIO;

$valorTotalPedagios = VALOR_PEDAGIO * $quantidadePedagio;

$valorTotalFrete = ($kmEntreCidades * 6.00) + $valorTotalPedagios;

/*
echo "<h1>Distância: $nomeCidadeOrigem para $nomeCidadeDestino são $kmEntreCidades Km.</h1>";
echo "<h1>Pedágio: serão R$ $valorTotalPedagios durante o trajeto, considerando o valor de R$ $valorCadaPedagios cada pedágio.</h1>";
echo "<h1>Valor Frete: R$ $valorTotalFrete, considerando R$6.00 por Km. </h1>";
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Document</title>
</head>
<body>
    <!--  Se o valor do pedágio for maior que 100,00 imprimir em vermelho -->
    <?php
        if($valorTotalPedagios > 100 ){
    ?>       
        <h1 style='color: red'> O valor total dos pedagios é: R$<em><?= number_format($valorTotalPedagios, 2
        
        
        
        
        , ",", ".")?></em>.</h1>
        <?php
            } else{
        ?>        
          echo <h1>O valor total dos pedágios é: R$<em><?= number_format($valorTotalPedagios, 2, ",", ".")?></em>.</h1>
        <?php     
            }
        ?>    
        

    <h1>A viagem de <?= $nomeCidadeOrigem ?> á <?= $nomeCidadeDestino ?> irá custar o valor total de R$ <em><?= number_format($valorTotalFrete, 2, ",", ".") ?></em>.</h1>
</body>
</html>