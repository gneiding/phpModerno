<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 12</title>
</head>

<?php
    const MINUTO = 60;
    const HORA = MINUTO * 60;
    const DIA = HORA * 24;
    const SEMANA = DIA * 7;    
    
    $tempo = $_GET['tempo'] ?? 0;
    $semanas = intdiv($tempo, SEMANA);
    $dias = intdiv($tempo % SEMANA, DIA);
    $horas = intdiv($tempo % DIA, HORA);
    $minutos = intdiv($tempo % HORA, MINUTO);
    $segundos = $tempo % MINUTO;
    /*
    $dias = intdiv($tempo % SEMANA, DIA);
    $horas = intdiv($tempo % , HORA);
*/
?>

<body>
    <header>
        <h1>Desafio 12</h1>
    </header>
    <main>
        <form action="#" method="get">
            <label for="tempo">Qual é o total de segundos?</label>
            <input type="number" name="tempo" id="tempo">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?= number_format($tempo, 0, ",", ".") ?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?= $semanas ?> semanas</li>
            <li><?= $dias ?> dias</li>
            <li><?= $horas ?> horas</li>
            <li><?= $minutos ?> minutos</li>
            <li><?= $segundos ?> segundos</li>
        </ul>
    </section>
</body>
</html>