<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cadastro";
    $port = 3307;
    $conexao = new mysqli($host, $user, $password, $database, $port);

    $sql = "INSERT INTO alunos(nome, email)
    VALUES('teste', 'teste@gmail.com')";
    $conexao->query($sql);
    $conexao->close();
?>