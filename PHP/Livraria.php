<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>
<body>
<?php

class romance{
    public $nome;
    public $anoPublicacao;
    public $autor;
    public $paginas;
}

$r1 = new romance();
$r1->nome = "Orgulho e Preconceito";
$r1->anoPublicacao = "1813";
$r1->autor = "Jane Austen";
$r1->paginas = "278 paginas";

echo "Nome:$r1->nome <br>";
echo "Ano de Publicacao:$r1->anoPublicacao <br>";
echo "Autor:$r1->autor <br>";
echo "$r1->paginas <br>";



$r2 = new romance();
$r2->nome = "A Culpa É das Estrelas";
$r2->anoPublicacao = "2012";
$r2->autor = "John Green";
$r2->paginas ="288 paginas";

echo "$r2->nome <br>";
echo "$r2->anoPublicacao <br>";
echo "$r2->autor <br>";
echo "$r2->paginas <br>";



$r3 = new romance();
$r3->nome = "O Cortiço";
$r3->anoPublicacao = "1890";
$r3->autor = "Aluísio Azevedo";
$r3->paginas = "354 paginas" ;

echo "$r3->nome <br>";
echo "$r3->anoPublicacao <br>";
echo "$r3->autor <br>";
echo "$r3->paginas <br>";



?>
</body>
</html>     