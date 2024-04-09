<?php

require_once '../controllers/controller.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div class="menu">
        <h1>
            Cadastrar usuário
        </h1>
                <form method="POST" action="/users/controllers/controller.php" class="button3">
                    <label for="name">Nome:</label><br>
                    <input type="text" name="nome" class="field"><br>
                    <label for="name" class="label">E-mail:</label><br>
                    <input type="email" name="email" class="field"><br>
                    <label for="name" class="label">CPF:</label><br>
                    <input type="cpf" name="cpf" class="field"><br>
                    <div class="button-container">
                        <input type="hidden" name="action" value="insert">
                        <input type="submit" value="Cadastrar">
                        </form>
                        <form action="../index.php" class="button3">
                            <input type="submit" value="Voltar">
                        </form>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>