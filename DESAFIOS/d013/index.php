<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 13</title>
    <style>
        li {
            list-style: none;
        }
    </style>
</head>

<?php
    $dinheiro = $_GET['dinheiro'] ?? 5;
    $notas100 = intdiv($dinheiro, 100);
    $notas50 = intdiv($dinheiro % 100, 50);
    $notas10 = intdiv($dinheiro % 50 , 10);
    $notas5 = intdiv($dinheiro % 10, 5);
?>

<body>
    <header>
        <h1>Desafio 13</h1>
    </header>
    <main>
        <form action="#" method="get">
            <label for="dinheiro">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="dinheiro" id="dinheiro" min="0" step="5">
            <p style="font-size: 0.7em;">*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?= number_format($dinheiro, 2, ",", ".") ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100.jpg" alt="100"> X <?= $notas100 ?></li>
            <li><img src="imagens/50.jpg" alt="50"> X <?= $notas50 ?></li>
            <li><img src="imagens/10.jpg" alt="10"> X <?= $notas10 ?></li>
            <li><img src="imagens/5.jpg" alt="5"> X <?= $notas5 ?></li>
        </ul>
    </section>
</body>
</html>