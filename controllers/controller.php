<?php

require_once '../classes/user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        $user = new User();
        switch ($_POST['action']) {
            case 'list':
                $users = $user->list();
                if(empty($users)) {
                    echo "<h2>Nenhum usuário cadastrado</h2>";
                // } else {
                //     foreach($users as $key => $value) {
                //         echo 'Id: ' . $value['id'] . '<br> Nome: ' . $value['nome'] . '<br> E-mail: ' . $value['email'] . '<br> CPF: ' . $value['cpf'] . '<hr>';
                //     }
                }
                break;
            case 'insert':
                if (isset($_POST['nome'], $_POST['email'], $_POST['cpf'])) {
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $cpf = $_POST['cpf'];
                    $rowCount = $user->insert($nome, $email, $cpf);
                    header("Location: ../index.php");
                }
                break;
            case 'delete':
                // Verifica se o parâmetro 'cpf' foi passado
                if (isset($_POST['cpf'])) {
                    $cpf = $_POST['cpf'];
                    $success = $user->delete($cpf);
                    header("Location: ../index.php");
                }
                break;
            case 'update':
                if(isset($_POST['nome'], $_POST['email'], $_POST['cpf'])) {
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $cpf = $_POST['cpf'];
                    header("Location: ../index.php");
                }
            default:
                echo 'Ação inválida';
                break;
        }
    }
} else {
    echo 'Acesso negado';
}