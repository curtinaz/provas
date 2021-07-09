<?php

require_once '../config.php';
session_start();

echo $_POST['mail']." ";
echo md5($_POST['senha']);

if (!$_POST['mail'] || !$_POST['senha']) {
    echo "Preencha todos os campos";

    unset($_SESSION["logado"]);
    unset($_SESSION["name"]);
} else {
    $mail = $_POST['mail'];
    $senha = md5($_POST['senha']);
}

//     $checkSQL = $conexao->query("SELECT * FROM usuarios WHERE email = '$user_email' AND senha = '$user_password'");
//     $checkReturn = $checkSQL->fetch_all(MYSQLI_ASSOC);

//     if (sizeof($checkReturn) == 1) {
//         $db_email = $checkReturn[0]['email'];
//         $db_pass = $checkReturn[0]['senha'];
//         $db_name = $checkReturn[0]['nome'];
//         // não achei necessário verificar se o e-mail e senha batem porque caso contrario, sizeof($checkReturn) seria 0;

//         echo "Logado com sucesso";

//         $_SESSION["login"]="YES"; // define a variavel de sessão login como YES
//         $_SESSION["name"]=$db_name; // define a variavel de sessão name o valor da coluna name resultante da query SQL.

//         header('Location: ./memberArea.php');
//     } else {
//         echo "Senha ou e-mail incorretos.";
//     }


// }

?>