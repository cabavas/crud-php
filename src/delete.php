<?php
    require_once '../controllers/controller.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Excluir Usuário por CPF</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<div class="menu">
<h2>Deletar Usuário por CPF</h2>
    <form action="/users/controllers/controller.php" method="post" class="button3">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" maxlength="11" placeholder="Digite o CPF" required class="field">
        <input type="hidden" name="action" value="delete">
        <input type="submit" value="Excluir">
    </form>

</div>
</body>
</html>