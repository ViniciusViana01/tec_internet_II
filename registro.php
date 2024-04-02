<!DOCTYPE html>
<html>



<?php
//Cadastro dos objetos

session_start();

//Variaveis     

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $objeto = array(
        'nome' => $_POST['nome'],
        'descricao' => $_POST['descricao'],
       
    );

    $_SESSION['objetos'][] = $objeto;

    $mensagem = 'Objeto cadastrado com sucesso!';
}
?>

<body>
    
    
<h1>Cadastro de objetos</h1>
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Nome do Objeto" required><br><br>
        <textarea name="descricao" placeholder="Descrição do Objeto" required></textarea><br>
        <input type="submit" value="Cadastrar">
        
    </form>

    <?php if (!empty($mensagem)): ?>
        <p><?= $mensagem ?></p>
        <a href="visualização.php">Ver Produtos Cadastrados</a>
    <?php endif; ?>
        
</body>
</html>
