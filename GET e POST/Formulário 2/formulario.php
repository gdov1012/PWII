<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['erro'])):?>
    <p style="color:red"><?php echo htmlspecialchars(string: $_GET['erro']); ?></p>
    <?php endif; ?>

    <form action="processa2.php" method="POST">

       <label>Nome: <br>
      <input type="text" name="nome" required>
      <label><br> <br>

       <label>Idade: <br>
      <input type="text" name="idade" required>
      <label><br> <br>

       <label>CPF: <br>
      <input type="text" name="cpf" required>
      <label><br> <br> 
      
      <label>RG: <br>
      <input type="text" name="rg" required>
      <label><br> <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>