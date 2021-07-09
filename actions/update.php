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
    $productId = $_POST['productId'];
    //coloca todos os dados informados em uma variável

    $conexao->query("UPDATE `produtos` SET `nome` = '$productName', `descricao` = '$productDesc', `quantidade` = '$productQtd', `valor_unitario` = '$productValue' WHERE `produtos`.`codigo` = $productId");
    //insere o produto na db

    header('Location: ../dashboard.php');
}

$conexao->close();
// fecha o banco.
