<?php

$nome = $_POST['nome'];
$assunto = $_POST['assunto'];

echo "Olá " . htmlspecialchars($nome) . "!<br>";
echo "Assunto: $assunto";
