<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <?php
    $n1 = 18;
    $n2 = 9;
    $soma = $n1 + $n2;
    $subtração = $n1 - $n2;
    $divisão = $n1 / $n2;
    $multiplicação = $n1 * $n2;
    $resto = $n1 % $n2;

    echo "A soma de $n1 e $n2 é: " . $soma;
    echo "</br>";
    echo "A subtração de $n1 e $n2 é: " . $subtração;
    echo "</br>";
    echo "A divisão de $n1 e $n2 é: " . $divisão;
    echo "</br>";
    echo "A multiplicação de $n1 e $n2 é: " . $multiplicação;
    echo "</br>";
    echo "O resto entre $n1 e $n2 é: " . $resto;
    ?>
</body>
</html>