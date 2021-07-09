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

    
}

mysqli_close($conexao);

//     $checkSQL = $connect->query("SELECT * FROM usuarios WHERE email = '$user_email'");
//     $checkReturn = $checkSQL->fetch_all(MYSQLI_ASSOC);

//     if (sizeof($checkReturn) > 0) {
//         // quando o $email não retornava dados, dava uma notice chata de que ele não era um array, dai fiz o if dessa forma pra evitar aquilo.
//         $email = $checkReturn[0]['email'];
//         if ($email == $user_email) {
//             echo "Já existe uma conta com o e-mail: ".$user_email;
//         } 
//     } else {
//         $registerSQL = $connect->query("INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '$user_name', '$user_email', '$user_password')");
//         echo "conta criada";

//         $loginSQL = $connect->query("SELECT * FROM usuarios WHERE email = '$user_email' AND senha = '$user_password'");
//         $loginReturn = $checkSQL->fetch_all(MYSQLI_ASSOC);   
        
//         $db_name = $loginReturn[0]['nome'];

//         $_SESSION["login"]="YES"; // define a variavel de sessão login como YES
//         $_SESSION["name"]=$db_name; // define a variavel de sessão name o valor da coluna name resultante da query SQL.

//         header('Location: ./memberArea.php');
//     }

//     mysqli_close($connect);

// }

?>