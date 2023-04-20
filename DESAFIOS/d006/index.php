<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 6</title>
    <style>
        #container {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            width: 410px;            
            height: 200px;
        }
       
        .todos {
            width: 50%;
            height: 50%;
            text-align: center;
        }

        .todos > p {
            line-height: 60px;        
            display: inline-block;
            vertical-align: middle;
            font-size: 1.4em;
            font-weight: bold;
        }

        .divisor, .quociente {
            border-left: solid 2px black;
        }

        .divisor {
            border-bottom: solid 2px black;
        }

        .resto p {
            text-decoration: underline;
            text-decoration-thickness: 2px;
        }

    </style>
</head>

<?php 
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 1;    
    $quociente = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;
    
?>

<body>
    <header>
        <h1>Desafio 6</h1>
    </header>
    <main>
        <h2>Anatomia de uma divisão</h2>
        <form action="" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="Divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h3>Estrutura da divisão</h3>
        <div id="container">
            
            <div class="dividendo todos"><p><?= $dividendo ?></p></div>
            <div class="divisor todos"><p><?= $divisor ?></p></div>
        
            <div class="resto todos"><p><?= $resto ?></p></div>
            <div class="quociente todos"><p><?= $quociente ?></p></div>
            
        </div>
    </section>
</body>
</html>