<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado: sucessor e antecessor</title>
</head>
<body>
    <header>
        <h1>Sucessor e antecessor de um número</h1>
    </header>
    <section>
        <?php 
            echo "<h2>Resultado final</h2>";
            $numero = $_GET['numero'] ?? 1;
            echo "<p>O número escolhido foi <strong>$numero</strong></p>";
            echo "<p>O seu antecessor é <strong>" . ($numero - 1) . "</strong></p>";
            echo "<p>O seu sucessor é <strong>" . ($numero + 1) . "</strong></p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05 Voltar</button>
    </section>
</body>
</html>