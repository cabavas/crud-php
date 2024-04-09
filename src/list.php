<?php
require_once '../controllers/controller.php';


?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<div class="menu">
    <h2> Usuários cadastrados</h2>
    <table class="array-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Supondo que $array seja o seu array de dados
            foreach ($users as $key => $value) {
                $class = ($key % 2 == 0) ? 'even-row' : 'odd-row';
                echo "<tr class='$class'>";
                echo "<td>{$value['id']}</td>";
                echo "<td>{$value['nome']}</td>";
                echo "<td>{$value['email']}</td>";
                echo "<td>{$value['cpf']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <form action="../index.php" class="button2">
            <input type="submit" value="Voltar">
    </form>
</div>
</body>