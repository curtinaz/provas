<?php
session_start();
require_once 'database.php';

if (isset($_SESSION["logado"])) {
    $id = $_GET['id'];
    $hasProduct = $conexao->query("SELECT * FROM `produtos` WHERE `codigo` = {$id}");
    if ($hasProduct->num_rows > 0) {
        $remove = $conexao->query("UPDATE `produtos` SET removed='YES' WHERE `codigo` = {$id}");
        header('Location: ../dashboard.php');
    } else {
        echo "O produto não foi encontrado.";
    }
} else {
    echo "Você precisa estar logado para realizar esta ação<br>";
    echo "<a href='../index.php'>Fazer login</a>";
}
?>