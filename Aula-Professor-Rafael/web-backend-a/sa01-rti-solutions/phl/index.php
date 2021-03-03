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

    <form  method="GET" action="calculaFrete.php">
        <h1>RTI Solutions</h1>
        <div class="input-group">
            <label for="origem">Cidade Origem</label>
            <input type="text" name="origem" placeholder="Origem" required/>
        </div>

        <div class="input-group">
            <label for="destino">Cidade Destino</label>
            <input type="text" name="destino" placeholder="Destino" required/>
        </div>

        <div class="input-group">
            <label for="nome">Distancia Km</label>
            <input type="number" name="Km" placeholder="Km" required/>
        </div>

        <div class="input-group">
            <label for="nome">Quantidade de Pedagios</label>
            <input type="number" name="quantidadePedagio" placeholder="Quantidade de Pedágios" required/>
        </div>

        <button>Calcular</button>
        <button type="reset">Limpar</button>
    </form>
    
    
</body>
</html>