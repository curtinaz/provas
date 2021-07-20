<?php

require_once '../config.php';
require_once '../utils/userAge.php';
session_start();

if (!isset($_SESSION['logado'])) {
    echo "Você precisa estar logado para acessar esta página.<br>";
    echo "<a href='../index.php'>Faça Login</a>";
    // testa se o usuário está logado
} else {
    $name = $_SESSION['name'];
    $mail = $_SESSION['email'];
    $userId = $_SESSION['user_id'];

    // $userQuery = $conexao->query("SELECT `nome`, `email` FROM users WHERE email = '$mail' AND senha = '$senha'");

    $pendentSQL = $conexao->query("SELECT * FROM tests WHERE `user_id` = '$userId' AND `made` = '0'");
    $pendentTests = $pendentSQL->fetch_all(MYSQLI_ASSOC);

    $madeSQL = $conexao->query("SELECT * FROM tests WHERE `user_id` = '$userId' AND `made` = '1'");
    $madeTests = $pendentSQL->fetch_all(MYSQLI_ASSOC);

    // fecha o php para o html entrar 
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <link rel="stylesheet" href="perfil.css">
        <link rel="stylesheet" href="nav-modal.css">



        <title>Perfil</title>
    </head>

    <body>
    <div class="modal">
            <div class="modal-menu">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <div class="menu-toggle">

                <ul class="modal-links">
                    <a href="./perfil.php">
                        <li class="link-items"><i class="far fa-user-circle"></i>Perfil</li>
                    </a>
                    <a href="./index.php">
                        <li class="link-items"><i class="far fa-file-alt"></i>Provas</li>
                    </a>
                    <a href="#">
                        <li class="link-items"><i class="fas fa-poll-h"></i>Resultados</li>
                    </a>
                    <a href="#">
                        <li class="link-items"><i class="far fa-file-certificate"></i></i>Certificados</li>
                    </a>
                    <a href="../actions/logout.php" id="exit-tab">
                        <li class="link-items"><i class="fas fa-sign-out-alt"></i>Desconectar</li>
                    </a>
                </ul>
            </div>
        </div>
        <aside>
            <div class="profile-picture">
                <i class="far fa-user-circle"></i>
            </div>
            <div class="items">
                <ul>
                    <a href="./perfil.php">
                        <li class="link-items"><i class="far fa-user-circle"></i>Perfil</li>
                    </a>
                    <a href="./index.php">
                        <li class="link-items"><i class="far fa-file-alt"></i>Provas</li>
                    </a>
                    <a href="#">
                        <li class="link-items"><i class="fas fa-poll-h"></i>Resultados</li>
                    </a>
                    <a href="#">
                        <li class="link-items"><i class="far fa-file-certificate"></i></i>Certificados</li>
                    </a>
                    <a href="../actions/logout.php">
                        <li class="link-items" id="exit-tab"><i class="fas fa-sign-out-alt"></i>Desconectar</li>
                    </a>
                </ul>
            </div>
        </aside>
        <main>
            <div class="container">
                <div class="container-profile">
                    <!-- <div class="back-btn">
                        <a href="index.php"><i class="fas fa-arrow-left"></i></a>
                    </div> -->
                    <div class="profile">
                        <i class="far fa-user-circle"></i>
                    </div>
                    <!-- <div class="profile-info">
                        <p>Nome: <?php echo $name; ?></p>
                        <p>Email: <?php echo $mail; ?> </p>
                         <p>Idade: <?php echo calcularIdade('2012-12-24') ?> anos</p>
                        <p>Sexo: masculino</p>
                        <p>Estado: Rio Grande do Sul</p>
                        <p>Cidade: Porto Alegre</p>
                    </div>
                </div>
                <div class="profile-info2"> -->

                </div>

            </div>
        </main>
        <?php echo '<script src="./script.js"></script>'; ?> 

    </body>

    </html>

<?php } //reinicia o php para poder fechar
?>