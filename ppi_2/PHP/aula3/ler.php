<?php

    include "conexao.php";

    echo "<h3>ler arquivo.txt</h3> <br>";
    
    $linhas = file("nomes.txt");
    foreach ($linhas as $linha) {
        echo $linha . "<br>";
    }
    
    echo "<hr><h3>ler consulta sql</h3><br>";

    $sql = "SELECT * FROM alunos";
    $resultado = $conexao->query($sql);
    while($linha = $resultado->fetch_assoc()) {
        echo $linha['nome'] . '&emsp;&emsp;|&emsp;&emsp;' . $linha['email'] . '<br>';
    }
    $conexao->close();

?>  