<?php

session_start();
require_once 'database.php';

if (!$_POST['productName'] || !$_POST['productDesc'] || !$_POST['productQtd'] || !$_POST['productValue']) {
    echo "Preencha todos os campos";
} else {
    $productName = $_POST['productName'];
    $productDesc = $_POST['productDesc'];
    $productQtd = $_POST['productQtd'];
    $productValue = $_POST['productValue'];
    //coloca todos os dados informados em uma variável

    if ($productQtd < 0) {
        $productQtd = 0;
    }

    $conexao->query("INSERT INTO `produtos` (`codigo`, `nome`, `descricao`, `quantidade`, `valor_unitario`, `removed`) VALUES (NULL, '$productName', '$productDesc', '$productQtd', '$productValue', NULL);");
    //insere o produto na db

    header('Location: ../dashboard.php');
}

$conexao->close();
// fecha o banco.
