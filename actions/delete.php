<?php
session_start();
require_once '../config.php';

if (isset($_SESSION["logado"])) {
    $id = $_GET['id'];
    $hasProduct = $conexao->query("SELECT * FROM `produtos` WHERE `codigo` = {$id}");
    if ($hasProduct->num_rows > 0) {
        $delete = $conexao->query("DELETE FROM `produtos` WHERE `codigo` = {$id}");
        header('Location: ../removidos.php');
    } else {
        echo "O produto não foi encontrado.";
    }
} else {
    echo "Você precisa estar logado para realizar esta ação<br>";
    echo "<a href='../index.php'>Fazer login</a>";
}
?>