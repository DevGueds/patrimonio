<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Identificação do usuário</span></div>
            <form action="validarLogin.php" method="POST">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="usuario" placeholder="Digite seu usuário" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <br>
                <!-- <div class="pass"><a href="#">Esqueceu a senha?</a></div> -->
                <div class="row button">
                    <input type="submit" name="submit" value="Entrar">
                </div>
                <!-- <div class="signup-link">Não possui conta? <a href="#">Cadastre-se agora</a></div> -->
            </form>
        </div>
    </div>
</body>

</html>