<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Conecte-se</title>
</head>

<body>
    <main>
        <!-- Login -->
        <form action="./actions/login.php" class="" id="login-form" method="POST">
            <h1>Login</h1>
            <input class="campo" id="mail" name="mail" type="email" placeholder="E-mail" required>
            <input class="campo" id="senha" name="senha" type="password" placeholder="Senha" required>
            <input type="submit" value="Entrar">

            <a href="#register" onClick="changeTitle('Registre-se')" id="register_btn" style="margin-bottom: -.4rem;">Não tem uma conta? Cadastre-se</a>

        </form>
        

        <!-- Cadastro -->
        <form action="./actions/register.php" class="cadastro off" id="register-form" method="POST" required>
            <h1>Cadastro</h1>
            <input class="campo" id="name" name="name" type="text" placeholder="Nome do Usuário" required>

            <input class="campo" id="mail" name="mail" type="email" placeholder="E-mail" required>

            <input class="campo" id="senha" name="senha" type="password" placeholder="Senha" required>

            <input type="submit" value="Cadastrar" >

            <a href="#login" onClick="changeTitle('Conecte-se')" id="register_btn2" style="margin-bottom: -.0rem;">Já tem uma conta? Faça o login</a>
        </form>
    </main>


    <script src="script.js"></script>
</body>

</html>