<?php

session_start();
require_once '../config.php';

if (!$_POST['mail'] || !$_POST['senha'] || !$_POST['name']) {
    echo "Preencha todos os campos";

    unset($_SESSION["logado"]);
    unset($_SESSION["name"]);
} else {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $senha = md5($_POST['senha']);
    //coloca todos os dados informados em uma variável

    $hasAccount = $conexao->query("SELECT * FROM usuarios WHERE email = '$mail'");
    if ($hasAccount->num_rows > 0) {
        echo "Já existe uma conta com este e-mail, <a href='../index.php'>faça login</a>";
    } else {
        $conexao->query("INSERT INTO `usuarios` (`id`, `name`, `email`, `senha`) VALUES (NULL, '$name', '$mail', '$senha')");

        $_SESSION["logado"]="YES";
        $_SESSION["name"]=$name;
        // define que o usuário está logado e, como o nome que ele informou no post é confiável, uso ele mesmo para definir o valor da session name.

        header('Location: ../dashboard.php');
        // redireciona o usuário para a página de 'logado'.
    }
}

$conexao->close();
// fecha o banco.

?>