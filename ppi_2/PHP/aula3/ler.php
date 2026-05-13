<?php
    $linhas = file("nomes.txt");
    foreach ($linhas as $linha) {
        echo $linha . "<br>";
    }
?>  