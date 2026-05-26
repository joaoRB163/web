<?php
include 'conexao.php';

$busca = $_POST['busca_post'];

$sql = "SELECT * FROM prd_vulneravel WHERE nome LIKE ?";

$stmt = $conn->prepare($sql);

$termo_busca = "%" . $busca . "%";

$stmt->bind_param("s", $termo_busca);

$stmt->execute();
$result = $stmt->get_result();

$conn->close();
?>

<h2>Resultados da Padaria (Seguro):</h2>
<table border="1" style="border-collapse: collapse;">
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
        <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
    </tr>
    <?php endwhile; ?>
</table>

<br><a href="index.html">Voltar para a Busca</a>

