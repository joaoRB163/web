<?php
include 'conexao.php';

$order = isset($_GET['order']) ? $_GET['order'] : 'id';

if (!in_array($order, ['nome','preco'])) {
    $order = 'id';
}

$itens_por_pagina = 10;

$pagina = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($pagina < 1) {
    $pagina = 1;
}

$offset = ($pagina - 1) * $itens_por_pagina;

$sql = "SELECT id, nome, categoria, preco FROM prd_nao_vulneravel ORDER BY $order ASC LIMIT ? OFFSET ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $itens_por_pagina, $offset);
$stmt->execute();
$result = $stmt->get_result();

$result_total = $conn->query("SELECT COUNT(*) AS total FROM prd_nao_vulneravel");
$row_total = $result_total->fetch_assoc();
$total_paginas = ceil($row_total['total'] / $itens_por_pagina);
?>

<h2>Produtos da Padaria</h2>
<a href="paginacao.php?page=<?php echo $pagina; ?>&order=nome">Ordenar por Nome</a> <br>
<a href="paginacao.php?page=<?php echo $pagina; ?>&order=preco">Ordenar por Preço</a>
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

<br>

<div style="margin-top: 15px;">
    <?php if ($pagina > 1): ?>
        <a href="paginacao.php?page=<?php echo $pagina - 1; ?>&order=<?php echo $order; ?>"><< Anterior</a>
    <?php endif; ?>

    <?php if ($pagina > 1 && $pagina < $total_paginas): ?> | <?php endif; ?>

    <?php if ($pagina < $total_paginas): ?>
        <a href="paginacao.php?page=<?php echo $pagina + 1; ?>&order=<?php echo $order; ?>">Próximo >></a>
    <?php endif; ?>
</div>

<br>