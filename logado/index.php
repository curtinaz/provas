<?php

require_once '../config.php';
session_start();

if (!isset($_SESSION['logado'])) {
    echo "Você precisa estar logado para acessar esta página.<br>";
    echo "<a href='./index.php'>Faça Login</a>";
    // testa se o usuário está logado
} else {
    $name = $_SESSION['name'];
    $mail = $_SESSION['email'];
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
            <span id="profile-name"><?php echo $name ?></span> 
            <span id="profile-email"><?php echo $mail ?></span>
        </div>
        <div class="items">
            <ul>
                <a href="#">
                    <li class="link-items"><i class="far fa-user-circle"></i> Perfil</li>
                </a>
                <a href="#">
                    <li class="link-items"><i class="far fa-file-alt"></i> Provas</li>
                </a>
                <a href="#">
                    <li class="link-items"><i class="fas fa-poll-h"></i> Resultados</li>
                </a>
                <a href="#">
                    <li class="link-items"><i class="far fa-file-certificate"></i></i> Certificados</li>
                </a>
                <a href="../actions/logout.php">
                    <li class="link-items"><i class="fas fa-sign-out-alt"></i> Desconectar</li>
                </a>
            </ul>
        </div>
    </aside>
    <main>
        <div class="container">
            <div class="top-side">
                <div class="pendents-tests">
                    <h2>Provas Pendentes</h2>
                    <div class="tests" id="test01">
                        <h4 id="title"> Bandagem Funcional</h4>
                        <p id="title">Dia: 07/08</p>
                        <p id="title">Duração: 60min</p>
                        <a href="./prova.html">teste</a>

                    </div>
                    <div class="tests" id="test02">
                        <h4 id="title"> Reabilitação das lesões no joelson lorem impsu adora met sirem</h4>
                        <p id="title">Dia: 16/08</p>
                        <p id="title">Duração: 60min</p>
                    </div>
                    <div class="tests" id="test03">
                        <h4 id="title"> Liberação Miofascial</h4>
                        <p id="title">Dia: 16/08</p>
                        <p id="title">Duração: 60min</p>
                    </div>
                    <div class="tests" id="test04">
                        <h4 id="title"> Liberação Miofascial</h4>
                        <p id="title">Dia: 16/08</p>
                        <p id="title">Duração: 60min</p>
                    </div>
                </div>

                <div class="made-tests">
                    <h2>Provas Feitas</h2>
                    <div class="tests" id="made-test01">
                        <h4 id="title"> Reabilitação das lesões no joelson lorem impsu adora met sirem</h4>
                        <p id="title">Dia: 11/05</p>
                        <p id="title">Duração: 60min</p>
                    </div>

                    <div class="tests" id="made-test01">
                        <h4 id="title"> Levantamento de peso Olímpico</h4>
                        <p id="title">Dia: 11/05</p>
                        <p id="title">Duração: 60min</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

<?php } //reinicia o php para poder fechar
?>