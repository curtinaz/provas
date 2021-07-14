<?php

require_once '../config.php';
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">

    <title>Provas</title>
</head>
<body>
    <aside>
        <div class="profile-picture">
            <i class="far fa-user-circle"></i>
        </div>
        <div class="name">
            <span id="profile-name">Olá,<?php echo $name ?></span> 
            <span id="profile-email"><?php echo $mail ?></span>
        </div>
        <div class="items">
            <ul>
                <a href="#">
                    <li class="link-items"><i class="far fa-user-circle"></i>Perfil</li>
                </a>
                <a href="#">
                    <li class="link-items"><i class="far fa-file-alt"></i>Provas</li>
                </a>
                <a href="#">
                    <li class="link-items"><i class="fas fa-poll-h"></i>Resultados</li>
                </a>
                <a href="#">
                    <li class="link-items"><i class="far fa-file-certificate"></i></i>Certificados</li>
                </a>
                <a href="../actions/logout.php">
                    <li class="link-items"><i class="fas fa-sign-out-alt"></i>Desconectar</li>
                </a>
            </ul>
        </div>
    </aside>
    <main>
        <div class="container">
            <div class="top-side">

            <?php if ($pendentSQL->num_rows > 0) { ?>

                <div class="pendents-tests">
                    <h2>Provas Pendentes</h2>

                    <?php for ($i = 0; $i < $pendentSQL->num_rows; $i++ ) {

                        $provaId = $pendentTests[$i]['prova_id'];

                        $provasSQL = $conexao->query("SELECT * FROM provas WHERE `id` = '$provaId'");
                        $provas = $provasSQL->fetch_all(MYSQLI_ASSOC);

                        $data = new DateTime($provas[0]['dia']);
                        $data = $data->format('d/m/Y');
                        $duracao = ($provas[0]['duracao']/60).' min';

                        echo '<div class="tests">';
                        echo '<h4 id="title">'.$provas[0]['nome'].'</h4>';
                        echo '<p id="title">Data: '.$data.'</p>';
                        echo '<p id="title">Duração: '.$duracao.'</p>';
                        echo '<a href="./prova.html">teste</a>';
                        echo '</div>';
                    } ?>

                    <div class="tests" id="test04">
                        <h4 id="title"> Liberação Miofascial</h4>
                        <p id="title">Data: 16/08</p>
                        <p id="title">Duração: 60min</p>
                    </div>
                </div>
            
            <?php } ?>

            <?php if ($madeSQL->num_rows > 0) { ?>

                <div class="made-tests">
                    <h2>Provas Feitas</h2>
                    
                    <div class="tests" id="made-test01">
                        <h4 id="title"> Reabilitação das lesões no joelson lorem impsu adora met sirem</h4>
                        <p id="title">Data: 11/05</p>
                        <p id="title">Duração: 60min</p>
                    </div>

                    <div class="tests" id="made-test01">
                        <h4 id="title"> Levantamento de peso Olímpico</h4>
                        <p id="title">Data: 11/05</p>
                        <p id="title">Duração: 60min</p>
                    </div>
                </div>

            <?php } ?>

            </div>
        </div>
    </main>
</body>
</html>

<?php } //reinicia o php para poder fechar
?>