
<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Acessa o dado enviado via POST
$nome = $_POST['nome'];
echo"Olá," . $nome . "!";
}
?>