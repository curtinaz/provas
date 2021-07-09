<?php

require_once '../config.php';
session_start();

if (!isset($_SESSION['logado'])) {
    echo "Você precisa estar logado para acessar esta página.<br>";
    echo "<a href='./index.php'>Faça Login</a>";
    // testa se o usuário está logado
} else {
    $name = $_SESSION['name'];
    // fecha o php para o html entrar 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">

    <title>Prova/Resultados</title>
</head>

<body>

    <aside>
        <div class="profile-picture">
            <i class="far fa-user-circle"></i>
        </div>
        <div class="name">
           <span id="profile-name"><?php echo $name ?></span> 
        </div>
        <div class="items">
            <ul>
                <li class="link-items"><i class="far fa-user-circle"></i> Perfil</li>
                <li class="link-items"><i class="far fa-file-alt"></i> Provas</li>
                <li class="link-items"><i class="fas fa-poll-h"></i> Resultados</li>
                <li class="link-items"><i class="far fa-file-certificate"></i></i> Certificados</li>
                <li class="link-items"><i class="fas fa-sign-out-alt"></i> Desconectar</li>
            </ul>
        </div>
    </aside>


    <main>  
        <div class="container">
            <div class="top-side">
                <h2>Provas Pendentes</h2>
            </div>
        </div>

    </main>




</body>

</html>

<?php } //reinicia o php para poder fechar
?>