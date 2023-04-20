<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal  0b = binario  0 = octal
        $num_hex = 0x1A;
        $num_bin = 0b1011;
        $num_oct = 010;
        $pot = (int) 3e2;  // O  '(int)' força o número de float para int
        
        echo "Hexadecimal = $num_hex <br/>";
        echo "Binario = $num_bin <br/>";
        echo "Octal = $num_oct <br/>";
        echo "Tipo das variáveis usando 'var_dump()': ";
        var_dump($num_hex);
        echo "<br/>Potência = $pot<br/>";
        echo "Tipo da variável após forçar por coerção: ";
        var_dump($pot);
    ?>
</body>
</html>