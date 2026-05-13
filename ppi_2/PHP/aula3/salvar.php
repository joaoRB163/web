 <?php

    $nome = $_POST['nome'];
    $arquivo = fopen("nomes.txt", "a");
    fwrite($arquivo, $nome . "\n");
    fclose($arquivo);
    echo "Nome salvo!";
    
?>
