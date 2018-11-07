<!DOCTYPE html>
<?php
include '../controle/validarLogin.php';
require_once '../modelo/UsuarioDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>Alterar Usuário</title>
    </head>
    <body>
        <?php
        $idUsuario = $_GET["idusuario"];
        $UsuarioDAO = new UsuarioDAO();
        $usuario = $UsuarioDAO->getUsuario($idUsuario);
        ?>
    <center>
        <div class="container">
            <div class="well"><strong>EDIÇÃO DE USUÁRIO</strong></div> 
            <form action="../controle/alterarUsuario.php" method="post" name="cadastrousuario" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idUsuario" value="<?php echo $usuario->id_usuario; ?>"/>
                <table class="table">
                    <tr>
                        <td>Nome do Usuário:</td>
                        <td><input type="text" name="nome" size="30" maxlength="90" value="<?php echo $usuario->nome; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Login:</td>
                        <td><input type="text" name="login" size="10" maxlength="45" value="<?php echo $usuario->login; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                    <input type="hidden" name="senha_antiga" value="<?php echo $usuario->senha; ?>" />
                    <td><input type="password" name="senha" size="10" maxlength="10" value=""/></td>
                    </tr>
                    <tr>
                        <td>Perfil:</td>
                        <td> 
                            <input type="radio" value="1"name="perfil" <?php echo $usuario->id_perfil == 1 ? 'checked' : ''; ?> />Administrador
                            <input type="radio" value="2" name="perfil" <?php echo $usuario->id_perfil == 2 ? 'checked' : ''; ?>>Usuário
                        </td>
                    </tr>
                    <tr>
                        <td>Foto:</td>
                        <td>
                            <img src="../visao/fotos/<?php echo $usuario->foto; ?>"width="100" height="60" />
                            <input type="file" id="foto" class="form-control-file" name="foto" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" value="Alterar"/>
                            <a href="listarUsuarios.php"><input type="button" class="btn btn-primary" value="Voltar"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php
                            if (!empty($_GET["msg"])) {
                                echo "<div class='alert alert-info'>", $_GET["msg"], "</div>";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </form> 
        </div>
    </center>
</body>
</html>
