<?php
require_once 'conexao.php';

$busca = $_POST['busca_post'];

$sql = "SELECT * FROM `prd_vulneravel` WHERE nome LIKE '%$busca%'";
$result = $conn->query($sql);
$conn->close();
?>

<h2>Resultados:</h2>
<table style="border-collapse: collapse;" border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Preço</th>
    </tr>
    <?php while ($produto = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $produto['id']; ?></td>
        <td><?php echo $produto['nome']; ?></td>
        <td><?php echo $produto['categoria']; ?></td>
        <td><?php echo $produto['preco']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>
