<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 9</title>
</head>

<?php
    $valor1 = $_GET['valor1'] ?? 1;
    $valor2 = $_GET['valor2'] ?? 1;
    $peso1 = $_GET['peso1'] ?? 1;
    $peso2 = $_GET['peso2'] ?? 1;
    $media_simples = ($valor1 + $valor2) / 2;
    $media_ponderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
?>

<body>
    <header>
        <h1>Desafio 9</h1>
    </header>
    <main>
        <h2>Médias aritméticas</h2>
        <form action="#" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="valor1">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1">
            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="valor2">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?= $valor1 ?> e <?= $valor2 ?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= number_format($media_simples, 2, ",", ".") ?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?= $peso1 ?> e <?= $peso2 ?> é igual a <?= number_format($media_ponderada, 2, ",", ".") ?></li>
        </ul>
    </section>
</body>
</html>