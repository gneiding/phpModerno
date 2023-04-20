<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Convsersor de moedas V1.0</title>
</head>
<body>
    <header>
        <h1>Conversor de moedas  V1.0</h1>
    </header>
    <section>
        <h2>Resultado:</h2>
        <?php
            $real = $_GET['reais'] ?? 0;
            $cotacao = 5.06;
            $dolar = number_format($real / $cotacao, 2, ",", ".");
            echo "<p>Seus <strong>R\$" . number_format($real, 2, ",", ".") . "</strong> equivalem a <strong>US\$$dolar</strong></p>";
            echo "<p><strong>Cotação fixa de R\$" . number_format($cotacao, 2, ",", ".") . "</strong> informada diretamente no código</p>";
        ?>
        <a href="javascript:history.go(-1)"><button>🠔 Voltar</button></a>
    </section>
</body>
</html>