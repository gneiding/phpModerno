<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>

    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            
            if ($_GET["nome"] && $_GET["sobrenome"]) {
                $nome = $_GET["nome"];
                $sobrenome = $_GET["sobrenome"];
            } elseif ($_GET["nome"]) {                
                $nome = $_GET["nome"];
                $sobrenome = '';
            } elseif ($_GET["sobrenome"]) {
                $sobrenome = $_GET["sobrenome"];
                $nome = '';
            } else {
                $nome = 'pessoa';
                $sobrenome = 'misteriosa';
            }
              
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site.</p>";            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>