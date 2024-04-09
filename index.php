<?php

require 'classes/user.php';

$user = new User();

$user->list();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Gerenciamento de Usuários</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    
    <div class="menu">
        <h1>Gerenciamento de Usuários</h1>
        <!-- Botão para cadastrar novo usuário -->
        <form action="src/insert.php" method="POST" class="button">
            <input type="hidden" name="action" value="insert">
            <input type="submit" value="Cadastrar novo usuário">
        </form>

        <!-- Botão para alterar usuário existente -->
        <form action="src/udpate.php" method="POST" class="button">
        <input type="hidden" name="action" value="update">
        <input type="submit" value="Alterar Usuário Existente">
        </form>

        <!-- Botão para listar todos os usuários -->
        <form action="src/list.php" method="POST" class="button">
        <input type="hidden" name="action" value="list">
        <input type="submit" value="Listar Todos os Usuários">
        </form>

        <!-- Botão para excluir usuário -->
        <form action="src/delete.php" method="POST" class="button">
        <input type="hidden" name="action" value="delete">
        <input type="submit" value="Excluir Usuário">
        </form>
    </div>

</body>

</html>