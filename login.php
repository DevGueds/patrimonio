<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Acesso ao Sistema</title>
</head>

<body>
    <div class="login-principal">
        <div class="login-esquerda">
            <img src="img/logo.png" class="login-esquerda-imagem" alt="Logotipo Prefeitura">
            <h1>SISTEMA DE GERENCIAMENTO <br>DE PATRIMÔNIO</h1>
        </div>
        <div class="login-direita">
            <form class="area-login" action="validarLogin.php" method="POST" >
                <h1>Entrar</h1>
                <!-- <form action="validarLogin.php" method="POST"> -->
                    <div class="area-formulario" >
                    <input type="text" name="usuario" placeholder="Usuário">
                    <input type="password" name="senha" placeholder="Senha">
                    <input class="inputSubmit" type="submit"  name="submit" value="Entar">
                <!-- <button class="btn-login">Entrar</button> -->
                <!-- </form> -->
                </div>
            </form>
        </div>
    </div>
</body>

</html>