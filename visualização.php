<?php
session_start();

// Verifica se há produtos cadastrados na sessão
if (isset($_SESSION['objetos']) && !empty($_SESSION['objetos'])) {
    $produtos = $_SESSION['objetos'];
} else {
    $produtos = array(); // array vazio
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de Produtos</title>
</head>
<body>
    <h1>Produtos Cadastrados</h1>
    <?php if (!empty($produtos)): ?>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
               <br> </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto['nome'] ?></td>
                        <td><?= $produto['descricao'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum produto cadastrado.</p>
    <?php endif; ?>
</body>
</html>
