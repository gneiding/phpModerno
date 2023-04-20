<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 10</title>
</head>

<?php 
    $ano_atual = date("Y");
    $ano_nasc = $_GET['ano_nasc'] ?? $ano_atual;
    $ano_futuro = $_GET['ano_futuro'] ?? $ano_atual;
    $idade = $ano_futuro - $ano_nasc;
?>

<body>
    <header>
        <h1>Desafio 10</h1>
    </header>
    <main>
        <h2>Calculando sua idade</h2>
        <form action="#" method="get">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasc" id="ano_nasc" required min="1900">
            <label for="ano_futuro">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= $ano_atual ?></strong>) </label>
            <input type="number" name="ano_futuro" id="ano_futuro" required min="<?= $ano_nasc ?>" placeholder="<?= $ano_atual ?>">
            <input type="submit" value="Qual será minha idade">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $ano_nasc ?> vai ter <strong><?= $idade ?> anos</strong> em <?= $ano_futuro ?></p>
    </section>
</html>