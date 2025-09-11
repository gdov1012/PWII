<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php

class Publicacao {
    protected $titulo;
    protected $anoPublicacao;
 
    //método construtor
    public function __construct($titulo, $anoPublicacao) {
        $this->titulo = $titulo;
        $this->anoPublicacao = $anoPublicacao;
    }
 
    public function getTitulo() {
        return $this->titulo;
    }
 
    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }
 
    public function exibirInfo() {
        return "
        <div class='livro'>
            <h2>{$this->titulo}</h2>
            <p><strong>Ano:</strong> {$this->anoPublicacao}</p>
        </div>";
    }
}
 

class Autor {
    private $nome;
    private $nacionalidade;
 
    public function __construct($nome, $nacionalidade) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
    }
 
    public function getNome() {
        return $this->nome;
    }
 
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
}
 

class Categoria {
    private $nome;
 
    public function __construct($nome) {
        $this->nome = $nome;
    }
 
    public function getNome() {
        return $this->nome;
    }
}
 

class Livro extends Publicacao {
    private $autor;
    private $categoria;
 
    public function __construct($titulo, $anoPublicacao, Autor $autor, Categoria $categoria) {
        parent::__construct($titulo, $anoPublicacao);
        $this->autor = $autor;
        $this->categoria = $categoria;
    }
 
    
    public function exibirInfo() {
        return "
        <div class='livro'>
            <h2>{$this->titulo}</h2>
            <p><strong>Ano:</strong> {$this->anoPublicacao}</p>
            <p><strong>Autor:</strong> {$this->autor->getNome()} ({$this->autor->getNacionalidade()})</p>
            <p><strong>Categoria:</strong> {$this->categoria->getNome()}</p>
        </div>";
    }
}
 

$autor1 = new Autor("Machado de Assis", "Brasileiro");
$categoria1 = new Categoria("Romance");
$livro1 = new Livro("Dom Casmurro", 1899, $autor1, $categoria1);
 
$autor2 = new Autor("Franz Kafka", "Tcheco");
$categoria2 = new Categoria("Ficção");
$livro2 = new Livro("A Metamorfose", 1915, $autor2, $categoria2);
 
$autor3 = new Autor("Milton Hatoum", "Brasileiro");
$categoria3 = new Categoria("Romance");
$livro3 = new Livro("Dois Irmãos", 2000, $autor3, $categoria3);

$autor4 = new Autor("Clarice Lispector", "Brasileira");
$categoria4 = new Categoria("Romance");
$livro4 = new Livro("A Hora da Estrela", 1977, $autor4, $categoria4);
 
$autor5 = new Autor("Rick Riordan", "norte-americano");
$categoria5 = new Categoria("fantasia");
$livro5 = new Livro("O Ladrão de Raios", 2005, $autor5, $categoria5);
 
$autor6 = new Autor("J.K. Rowling", "Britânica");
$categoria6 = new Categoria("Fantasia");
$livro6 = new Livro("Harry Potter e a Pedra Filosofal", 1997, $autor6, $categoria6);
 
$autor7 = new Autor("Jane Austen", "Inglesa");
$categoria7 = new Categoria("Romance");
$livro7 = new Livro("Orgulho e Preconceito", 1813, $autor7, $categoria7);
 
// array 
$livros = [$livro1, $livro2, $livro3, $livro4, $livro5, $livro6, $livro7];
?>
<div class="container">
        <h1> Biblioteca</h1>
        <?php
            foreach ($livros as $livro) {
                echo $livro->exibirInfo();
            }
        ?>
    </div>
</body>
</html>