<!DOCTYPE html>
<?php
include '../controle/validarLogin.php';
require_once '../modelo/UsuarioDAO.php';
require_once '../util/funcaoData.php';
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>Lista de Usuários</title>
    </head>
    <body>
    <br />
    <center>
        <div class="container">
            <div class="well"><strong>LISTA DE USUÁRIOS</strong></div> 
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-info">
                        <th>Nome </th>
                        <th>Login </th>
                        <th>Perfil </th>
                        <th>Data de Cadastro </th>
                        <th>Excluir </th>
                        <th>Alterar </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $UsuarioDAO = new UsuarioDAO();
                    $Usuarios = $UsuarioDAO->listarTodos();
                    foreach ($Usuarios as $usuario) {
                        echo "<tr>";
                        echo "  <td> {$usuario->nome} </td>";
                        echo "  <td> {$usuario->login} </td>";
                        echo "  <td> {$usuario->perfil} </td>";
                        echo "  <td>" . dateUStoDateBR($usuario->dt_cadastro) . "</td>";
                        echo "  <td align='center'>"
                            . "     <a href='../controle/excluirUsuario.php?idusuario={$usuario->id_usuario}'><i class='glyphicon glyphicon-remove'></i></a>"
                            . " </td>";
                        echo "  <td align='center'> <a href='formAlterarUsuario.php?idusuario={$usuario->id_usuario}'><i class='glyphicon glyphicon-pencil'></i></a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php
            if (!empty($_GET["msg"])) {
                echo "<div class='alert alert-success'>", $_GET["msg"], "</div>";
            }
            ?>
        </div>
    </center>
</body>
</html>
