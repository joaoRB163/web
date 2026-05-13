<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cadastro";
    $port = 3307;
    $conexao = new mysqli($host, $user, $password, $database, $port);

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO alunos(nome, email)
            VALUES('$nome', '$email')";
            
    $conexao->query($sql);
    $conexao->close();

    echo "Registro salvo com sucesso!";
?>