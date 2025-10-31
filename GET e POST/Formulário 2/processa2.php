<?php

// Conexão com o banco de dados
$host = 'localhost';
$dbname = 'cadastro_simples';
$usuario = 'root'; // usuário MySQL
$senha = '';       // senha do usuário MySQL
 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
 
// Função para limpar os dados
function clean($s): string {
    return htmlspecialchars(trim($s), ENT_QUOTES, 'UTF-8');
}
 
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = clean($_POST['nome'] ?? '');
    $idade = clean($_POST['idade'] ?? '');
    $cpf = clean($_POST['cpf'] ?? '');
    $rg = clean($_POST['rg'] ?? '');
}

  // Validações básicas
    $erros = [];
 
    if ($nome == '') $erros[] = 'Nome é obrigatório.';
    if ($idade == '' || !ctype_digit($idade)) $erros[] = 'Idade inválida.';
 
    $cpf_digits = preg_replace('/\D/', '', $cpf);
    if (strlen($cpf_digits) != 11) $erros[] = 'CPF inválido.';
 
    $rg_digits = preg_replace('/\D/', '', $rg);
    if (strlen($rg_digits) < 5) $erros[] = 'RG inválido.';
 
    if (!empty($erros)) {
        $erro_msg = implode('<br>', $erros);
        header("Location: formulario.php?erro=" . urlencode($erro_msg));
        exit;
    }
 
    // Insere os dados no banco
    try {
        $stmt = $pdo->prepare("INSERT INTO pessoas (nome, idade, cpf, rg) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $idade, $cpf_digits, $rg_digits]);
 
        echo "<h2>Cadastro realizado com sucesso!</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Idade:</strong> $idade</p>";
        echo "<p><strong>CPF:</strong> $cpf_digits</p>";
        echo "<p><strong>RG:</strong> $rg_digits</p>";
        echo "<p><a href='formulario.html'>Voltar</a></p>";
    } catch (PDOException $e) {
        die("Erro ao inserir dados: " . $e->getMessage());
    }


?>