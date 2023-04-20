<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 11</title>
</head>

<?php 
    $preco = $_GET['preco'] ?? 0;
    $percentual = $_GET['percentual'] ?? 5;
    $novo_valor = $preco * (100 + $percentual) / 100;
?>

<script>
    function percent() {
        ipercent.innerHTML = Number(percentual.value)
    }
</script>

<body>
    <header>
        <h1>Desafio 11</h1>
    </header>
    <main>
        <h2>Reajustador de preços</h2>
        <form action="#" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" required min="1" step="0.01">
            <label for="percentual">Qual será o percentual de reajuste? (<strong id="ipercent">5</strong>%)</label>
            <input type="range" name="percentual" id="percentual" min="0" max="100" value="5" oninput="percent()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava <?= number_format($preco, 2, ",", ".") ?>, com <strong><?= $percentual ?>% de aumento </strong> vai passar a custar <strong><?= number_format($novo_valor, 2, ",", ".") ?></strong> a partir de agora.</p>
    </section>
</body>
</html>