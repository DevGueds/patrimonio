<!-- Inicio Sessão PHP -->
<?php
              while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$user_data['id_usuario']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>
                    <a class='btn btn-deletar' href='#'>Deletar</a>
                    <a class='btn btn-editar' href='#' onclick='abrirModal()'>Editar</a>
                </td>";
                // echo "<td>".$user_data['usuario']."</td>";
                echo "</tr>";
              }
            
            ?> 

        <!-- Fim Sessão PHP -->


        <a class="btn btn-deletar" href="delete.php?id=$user_data['id_usuario']">Deletar</a>




        <!-- <form method="POST" action="delete.php" onsubmit="return confirm ('Tem certeza que deseja excluir?')" > -->
        <input type="hidden" name="id" href="delete.php" value="<?php echo $user_data["id_usuario"];?>">
                      <input type="submit" class="btn btn-deletar" name="submit" value="Deletar">
                      <a class="btn btn-deletar" href="delete.php" <?php echo $user_data["id_usuario"];?>>Deletar1</a>
                    <!-- </form> -->
                    <!-- <button type="button" class="btn btn-deletar"  value="<?php echo $user_data["id_usuario"];?>">Deletar</button> -->
                    <button type="button" class="btn btn-editar" onclick="abrirModal()">Editar</button>
                    <!-- <a class='btn btn-deletar' href='delete.php?id=$user_data[id_usuario]'>Deletar</a>
                    <a class='btn btn-editar' href='edit.php?id=$user_data[id_usuario]'>Editar</a> -->

                    <?php

    session_start();
    include_once('config.php');

    // $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $id = $_POST['id'];
    $query = "DELETE FROM cadastro_usuario WHERE id_usuario=$id";
    $resultado_usuario = mysqli_query($conexao, $query);

    header('Location: usuarios.php');
?> //delete.php