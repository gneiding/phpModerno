<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Gerador de número aleatório</title>
</head>
<body>
    <header>
        <h1>Gerador de número aleatório</h1>
    </header>
    <section>
        <p>Gerando um número aleatório entre 0 e 100..</p>
        <?php
            $min = 0;
            $max = 100;
            $valor = mt_rand($min, $max);
            echo "<p>O valor gerado foi <strong>$valor</strong></p>";

            //Existem três formas de gerar números aleatórios
            // rand() = 1951 - Linear Congretial Generator (algoritmo simples  mas lento)
            // mt_rand() = 1997 Mersenne Twister (algoritmo mais novo, mais seguro e mais rápido)
            // random_int() gera números aleatórios ciptograficamente seguros, mas é lento

        ?>
        <button onclick="javascript:window.location.reload()">&#x1F504 Gerar outro</button>
    </section>
</body>
</html>