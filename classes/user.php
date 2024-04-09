<?php

declare(strict_types=1);

class User
{
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=funcionarios', 'root', '');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list(): array
    {
        $sql = 'SELECT * from users';

        $users = [];

        foreach ($this->conn->query($sql) as $key => $value) {
            array_push($users, $value);
        }

        return $users;
    }

    public function insert(string $nome, string $email, string $cpf): int
    {
        $sql = 'INSERT INTO users(nome, email, cpf) VALUES (?, ?, ?)';

        $prepare = $this->conn->prepare($sql);

        $prepare->bindParam(1, $nome);
        $prepare->bindParam(2, $email);
        $prepare->bindParam(3, $cpf);
        $prepare->execute();
        return $prepare->rowCount();
    }

    public function update(string $nome, string $email, string $cpf): int
    {
        $sql = "UPDATE users SET nome = ?, email = ? WHERE cpf = ?";
        $prepare = $this->conn->prepare($sql);

        $prepare->bindParam(1, $nome);
        $prepare->bindParam(2, $email);
        $prepare->bindParam(3, $cpf);

        $prepare->execute();
        $rowCount = $prepare->rowCount();

        return $prepare->rowCount();

    }

    public function delete(string $cpf): bool
    {

        $sql = "DELETE FROM users WHERE cpf = ?";

        $prepare = $this->conn->prepare($sql);

        $prepare->bindParam(1, $cpf);
        $prepare->execute([$cpf]);

        $rowCount = $prepare->rowCount();
        if ($rowCount > 0) {
            return true;
        } else {
            return false;
        }
    }
}