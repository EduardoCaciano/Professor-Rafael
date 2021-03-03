<?php
    const ACRESCIMO_10 = 0.10;
    const ACRESCIMO_20 = 0.20;

    $nomeFuncionario = $_GET["nome"];

    $salarioFuncionario = $_GET["salario"];

    if($salarioFuncionario > 5.000) {
       $aumento10 =  ($salarioFuncionario * ACRESCIMO_10) + $salarioFuncionario;
    } else {
       $aumento20 = $salarioFuncionario * ACRESCIMO_20;  
    }
?>

<!-- ****************************************************************************************************** -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Document</title>
</head>
<body>
    <h1>O <em><?= $nomeFuncionario ?></em> passará a receber R$ <em><?=number_format($aumento10, 2, ",", ".") ?></em>.</h1>
</body>
</html>