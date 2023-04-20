<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Somar dois números</title>
</head>
<body>
    <header>
        <h1>Somar dois números</h1>
    </header>
    <?php
        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;
        $soma = $valor1 + $valor2;
    ?>    
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
        <br/>
        <h2>Resultado:</h2>
        <p>Números digitados:</p>
        <p>
            Valor 1:<strong> <?=$valor1?></strong>
            <br/>Valor 2: <strong><?=$valor2?></strong>
        </p>
        <p>
            O resultado da soma entre <strong><?=$valor1?></strong> e <strong><?=$valor2?></strong> é igual a <strong><?=$soma?></strong>
        </p>
    </main>
</body>
</html>