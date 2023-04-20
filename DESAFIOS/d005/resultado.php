<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Analisador de números Reais</title>
</head>
<body>
    <header>
        <h1>Analisador de números Reais</h1>
    </header>
    <section>
        <h2>Resultado da análise</h2>
        <?php
            $numero = $_REQUEST["numero"] ?? 1;
            $inteiro = intval($numero);
            
            $decimal = $numero - $inteiro;
            echo "<p>Analisando o número<strong> " . number_format($numero, 3, ",", ".") . " </strong>informado pelo usuário:</p>";            
        ?>
    
        <ul>
            <li>A parte inteira do número é <strong><?php echo number_format($inteiro, 0 , ",", ".") ; ?></strong></li>
            <li>A parte fracionária do número é <strong><?php echo number_format($decimal, 3, ",", "."); ?></strong></li>
        </ul>
    

    <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
    </section>
</body>
</html>