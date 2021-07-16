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

    $testId = $_GET['id'];

    $questionsSQL = $conexao->query("SELECT questoes FROM provas WHERE `id` = '$provaId'");
    $questions = $questionsSQL->fetch_all(MYSQLI_ASSOC);

    // fecha o php para o html entrar 
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="prova.css">
        <title>Prova - em andamento</title>
    </head>

    <body>
        <main>
            <div class="container">
                <div class="back-btn">
                    <a href="index.php"><i class="fas fa-arrow-left"></i></a>
                </div>

                <div class="header">

                    <h2 id="header-title">
                        Informações da prova
                    </h2>
                    <p id="header-description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.
                    </p>
                </div>

                <?php if ($pendentSQL->num_rows > 0) { }?>

                <div class="quests-field">
                    <div class="quest">
                        <form action="" id="quest01">
                            <h4>De acordo com a famosa frase de Ramiro Inchacuspe, marque a alternativa correta:</h4>
                            <input type="radio" id="quest1-a" name="age" value="Estelar">
                            <label for="quest1-a">Estelar.</label><br>
                            <input type="radio" id="quest1-b" name="age" value="Estalar">
                            <label for="quest1-b">Estalar.</label><br>
                            <input type="radio" id="quest1-c" name="age" value="Estralar">
                            <label for="quest1-c">took a galley of type
                                and scrambled it to make a type specimen book.</label><br>
                            <input type="radio" id="quest1-d" name="age" value="Nenhuma das alternativas acima.">
                            <label for="quest1-d">Nenhuma das alternativas acima.</label><br>
                            <input type="radio" id="quest1-e" name="age" value="Todas alternativas acima">
                            <label for="quest1-e">Todas alternativas acima.</label><br>
                        </form>
                    </div>
                    <div class="quest">
                        <form action="" id="quest01">
                            <h4>De acordo com a famosa frase de Ramiro Inchacuspe, marque a alternativa correta:</h4>
                            <input type="radio" id="quest1-a" name="age" value="Estelar">
                            <label for="quest1-a">Estelar.</label><br>
                            <input type="radio" id="quest1-b" name="age" value="Estalar">
                            <label for="quest1-b">Estalar.</label><br>
                            <input type="radio" id="quest1-c" name="age" value="Estralar">
                            <label for="quest1-c">took a galley of type
                                and scrambled it to make a type specimen book.</label><br>
                            <input type="radio" id="quest1-d" name="age" value="Nenhuma das alternativas acima.">
                            <label for="quest1-d">Nenhuma das alternativas acima.</label><br>
                            <input type="radio" id="quest1-e" name="age" value="Todas alternativas acima">
                            <label for="quest1-e">Todas alternativas acima.</label><br>
                        </form>
                    </div>
                    <div class="quest">
                        <form action="" id="quest01">
                            <h4>De acordo com a famosa frase de Ramiro Inchacuspe, marque a alternativa correta:</h4>
                            <input type="radio" id="quest1-a" name="age" value="Estelar">
                            <label for="quest1-a">Estelar.</label><br>
                            <input type="radio" id="quest1-b" name="age" value="Estalar">
                            <label for="quest1-b">Estalar.</label><br>
                            <input type="radio" id="quest1-c" name="age" value="Estralar">
                            <label for="quest1-c">took a galley of type
                                and scrambled it to make a type specimen book.</label><br>
                            <input type="radio" id="quest1-d" name="age" value="Nenhuma das alternativas acima.">
                            <label for="quest1-d">Nenhuma das alternativas acima.</label><br>
                            <input type="radio" id="quest1-e" name="age" value="Todas alternativas acima">
                            <label for="quest1-e">Todas alternativas acima.</label><br>
                        </form>
                    </div>
                    <div class="quest">
                        <form action="" id="quest01">
                            <h4>De acordo com a famosa frase de Ramiro Inchacuspe, marque a alternativa correta:</h4>
                            <input type="radio" id="quest1-a" name="age" value="Estelar">
                            <label for="quest1-a">Estelar.</label><br>
                            <input type="radio" id="quest1-b" name="age" value="Estalar">
                            <label for="quest1-b">Estalar.</label><br>
                            <input type="radio" id="quest1-c" name="age" value="Estralar">
                            <label for="quest1-c">took a galley of type
                                and scrambled it to make a type specimen book.</label><br>
                            <input type="radio" id="quest1-d" name="age" value="Nenhuma das alternativas acima.">
                            <label for="quest1-d">Nenhuma das alternativas acima.</label><br>
                            <input type="radio" id="quest1-e" name="age" value="Todas alternativas acima">
                            <label for="quest1-e">Todas alternativas acima.</label><br>
                        </form>
                    </div>
                </div>
                <div class="buttons-navigate">
                    <a href="#" id="finish-quest">Finalizar Prova</a>
                </div>
            </div>
        </main>
    </body>

    </html>

<?php } //reinicia o php para poder fechar
?>