<?php

    session_start();

    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        //Acesso ao sistema
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        

        //Verificando se os dados estão sendo passados
        // print_r('Usuário: ' .$usuario);
        // print_r('<br>');
        // printf('Senha: ' .$senha);

        $sql = "SELECT * FROM cadastro_usuario WHERE usuario = '$usuario' and senha = '$senha'";
        
        $result = $conexao->query($sql);
        $data_usuario = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) < 1)
        {
            // print_r('Não existe esse usuário cadastrado');

            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else{
        //    print_r('Usuário encontrado');
            $_SESSION['id_usuario'] = $data_usuario['id_usuario'];
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: home.php');
        }


    }
    else{
        //Não acesso sistema | Retorna para a tela de login
        header('Location: login.php');
    }

?>