<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Conversor de moedas v2.0</title>
</head>
<body>
    <header>
        <h1>Coversor de moedas v2.0</h1>
    </header>
    <section>
        <h2>Resultado</h2>
        <?php
            $real = $_REQUEST["real"] ?? 0;
            $lang = "pt_BR";
            $padrao = numfmt_create($lang, NumberFormatter::CURRENCY);

            $data_inicio = date("m-d-Y", strtotime("-7 days"));
            $data_fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $data_inicio .'\'&@dataFinalCotacao=\''. $data_fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $dolar = $real / $cotacao;
            echo "<p>Os seus " . numfmt_format_currency($padrao, $real, "BRL")  . " correspondem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>";
            echo "<br/>Cotação do dia: R\$$cotacao atualizada em " . $dados["value"][0]["dataHoraCotacao"];
            echo "<br/>*Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>