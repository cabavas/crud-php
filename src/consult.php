<?php

    require_once "../controllers.php";

    if (!empty($_POST['cpf'])) {
        $pdo = require 'connect.php'; // Estabelece a conexão com o banco de dados

        $cpf = $_POST['cpf']; // Recebe o CPF do formulário

        // Prepara e executa a consulta preparada
        $sql = "SELECT * FROM users WHERE cpf = ?";
        $prepare = $pdo->prepare($sql);
        $prepare->execute([$cpf]);
        $rowCount = $prepare->rowCount(); // Obtém o número de linhas retornadas pela consulta

        if ($rowCount > 0) {
            // Se houver resultados, redireciona para update.php com o CPF como parâmetro
            exit(); // Encerra o script para evitar que o HTML abaixo seja enviado ao navegador
        } else {
            echo 'Nenhum usuário cadastrado com esse CPF.';
        }
    } else {
        echo 'Por favor, forneça um CPF.';
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Usuário por CPF</title>
</head>
<body>

<h2>Consulta de Usuário por CPF</h2>

<form method="post">
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" maxlength="11" placeholder="Digite o CPF" required>
    <input type="submit" value="Consultar">
</form>

</body>
</html>