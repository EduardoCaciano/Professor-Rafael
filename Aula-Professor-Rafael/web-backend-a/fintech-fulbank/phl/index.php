<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Document</title>
</head>
<body>
    <!-- Formulario -->
    <form  method="GET" action="calculaAumento.php">
        <h1>Fintech Fulbank</h1>
        <div class="input-group">
            <label for="origem">Nome</label>
            <input type="text" name="nome" placeholder="Digite o nome completo" required/>
        </div>

        <div class="input-group">
            <label for="nome">Salário</label>
            <input type="number" name="salario" placeholder="Digite o valor do salário" required/>
        </div>

        <button>Calcular</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>

