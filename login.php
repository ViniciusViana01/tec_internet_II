<?php

$usuarios = array(
    'usuario1' => 'senha1',
    'usuario2' => 'senha2'
);

// Verifica se o formulário foi submetido
if($_POST){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se o usuário existe e a senha está correta
    if($usuarios[$username] == $password){
        header('Location: registro.php');
    }else{
        echo 'Usuário ou senha inválidos.';
    }
}
?>


<form method="post" action="">
    <label for="username">Nome de usuário:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Senha:</label><br>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Login">
</form>
