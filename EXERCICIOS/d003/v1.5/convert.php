<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moeda v1.5</title>
</head>
<body>
    <header>
        <h1>Conversor de moeda v1.5</h1>
    </header>
    <main>
        <h1>Resultado</h1>
        <?php 
            $cotacao = 5.22;
            $real = $_GET["real"] ?? 0;
            $lang = "pt_BR";
            $dolar = $real / $cotacao;

            //Formatação de moedas com internacionalização
            $padrao = numfmt_create($lang, NumberFormatter::CURRENCY);
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, 'BRL') . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>