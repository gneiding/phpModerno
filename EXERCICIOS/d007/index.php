<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 7</title>
</head>

<?php 
    $sal_min = 1320;
    $salario = $_GET['salario'] ?? 0;
    $num_minimos = intdiv($salario, $sal_min);
    $resto = $salario % $sal_min;
?>

<body>
    <header>
        <h1>Desafio 7</h1>
    </header>
    <main>
        <h2>Informe seu salário</h2>
        <form action="#" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario">
            <p>Considerando um salário mínimo de <strong>R$<?= number_format($sal_min, 2, ",", ".") ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section style="max-width: 460px;">
        <h2>Resultado final</h2>
        <p>Quem recebe um salário de R$<?= number_format($salario, 2, ",", ".") ?> ganha <strong><?= $num_minimos ?> salários mínimos</strong> + R$<?= number_format($resto, 2, "," , ".") ?></p>
    </section>
</body>
</html>