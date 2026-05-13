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
    
    echo "Registro salvo com sucesso! <br>";
    
    $sql = "SELECT * FROM alunos";
    $resultado = $conexao->query($sql);
    while($linha = $resultado->fetch_assoc()) {
        echo $linha['nome'] . '  |  ' . $linha['email'] . '<br>';
    }
    $conexao->close();
?>