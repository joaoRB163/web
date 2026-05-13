<?php

    include "conexao.php";
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO alunos(nome, email)
            VALUES('$nome', '$email')";
            
    $conexao->query($sql);
    
    echo "Registro salvo com sucesso! <br>";

    $conexao->close();