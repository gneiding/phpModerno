<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 8</title>
</head>

<?php 
    $numero = $_GET['numero'] ?? 1;
?>

<body>
    <header>
        <h1>Desafio 8</h1>
    </header>
    <main>
        <h2>Informe um número</h2>
        <form action="#" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Calcular raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <p>Analisando o <strong>número <?= $numero ?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?= number_format(sqrt($numero), 3, ",", ".") ?></strong></li>
            <li>A sua raiz cúbica é <strong><?= number_format(pow($numero, 1/3), 3, ",", ".") ?></strong></li>
        </ul>
    </section>
    
</body>
</html>