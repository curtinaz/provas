<?php

require_once '../config.php';
session_start();

if (!$_POST['mail'] || !$_POST['senha']) {
    echo "Preencha todos os campos";

    unset($_SESSION["logado"]);
    unset($_SESSION["name"]);
    unset($_SESSION["mail"]);
} else {
    $mail = $_POST['mail'];
    $senha = md5($_POST['senha']);

    $loginQuery = $conexao->query("SELECT * FROM users WHERE email = '$mail' AND senha = '$senha'");

    if ($loginQuery->num_rows == 1) {
        $userQuery = $conexao->query("SELECT `nome`, `email` FROM users WHERE email = '$mail' AND senha = '$senha'");
        $userInfos = $userQuery->fetch_all(MYSQLI_ASSOC);
        // pega o nome do usuário do banco de dados.

        $_SESSION["logado"]="YES";
        $_SESSION["name"]=$userInfos[0]['nome'];
        $_SESSION["email"]=$userInfos[0]['email'];
        // define que o usuário está logado e, define a variável de sessão name com o valor retirado do banco de dados.

        header('Location: ../logado/');
        
    } else {
        echo "Dados invalidos. <a href='../'>Refaça o login</a>";
    }
}

//     $checkSQL = ;
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