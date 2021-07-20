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

    $testSQL = $conexao->query("SELECT * FROM tests WHERE `id` = '$testId'");
    $test = $testSQL->fetch_all(MYSQLI_ASSOC);

    $provaId = $test[0]['prova_id'];

    $questionsSQL = $conexao->query("SELECT questoes, briefing FROM provas WHERE `id` = '$provaId'");
    $questions = $questionsSQL->fetch_all(MYSQLI_ASSOC);

    $briefing = $questions[0]['briefing'];
    $questoesInLine = $questions[0]['questoes'];


    $questSQL = $conexao->query("SELECT * FROM questoes WHERE `id` IN ($questoesInLine) ORDER BY FIELD (id, $questoesInLine)");
    $quest = $questSQL->fetch_all(MYSQLI_ASSOC);

    $questoes = explode(', ', $questoesInLine);

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
                        <?php echo $briefing ?>
                    </p>
                </div>

                <?php if ($questionsSQL->num_rows > 0) {
                    echo '<div class="quests-field">';
                    
                    echo '<form action="" id="">';

                    for ($i = 0; $i < count($questoes); $i++) {

                        echo '<div class="quest">';

                        $atividade = ($i+1).'. ';

                        echo '<h4>'.$atividade.$quest[$i]['enunciado'] . '</h4>';
                        echo '<input type="radio" id="'.$i.'-a" name="'.$i.'" value="a">';
                        echo '<label for="'.$i.'-a">'.$quest[$i]['alt1'].'</label><br>';

                        echo '<input type="radio" id="'.$i.'-b" name="'.$i.'" value="b">';
                        echo '<label for="'.$i.'-b">'.$quest[$i]['alt2'].'</label><br>';

                        echo '<input type="radio" id="'.$i.'-c" name="'.$i.'" value="c">';
                        echo '<label for="'.$i.'-c">'.$quest[$i]['alt3'].'</label><br>';

                        echo '<input type="radio" id="'.$i.'-d" name="'.$i.'" value="d">';
                        echo '<label for="'.$i.'-d">'.$quest[$i]['alt4'].'</label><br>';

                        echo '<input type="radio" id="'.$i.'-e" name="'.$i.'" value="e">';
                        echo '<label for="'.$i.'-e">'.$quest[$i]['alt5'].'</label><br>';

                        echo '</div>';

                    }

                    echo '</form>';

                
                ?>


                    <!-- <div class="quest">
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
                    </div> -->

            </div>

        <?php } ?>

        <div class="buttons-navigate">
            <a href="#" id="finish-quest">Finalizar Prova</a>
        </div>
        </div>
        </main>
    </body>

    </html>

<?php } //reinicia o php para poder fechar
?>