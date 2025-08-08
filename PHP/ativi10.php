<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <?php
    $n1 = 6;
    $n2 = 9;
    $n3 = 7;

    $m = ($n1 + $n2 + $n3 )/ 3;

    if ($m >= 7){
        echo "Aluno aprovado com média $m";
    } else {
        echo "Aluno reprovado com média $m";
    }

    ?>
</body>
</html>