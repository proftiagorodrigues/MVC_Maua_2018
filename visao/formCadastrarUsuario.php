<!DOCTYPE html>
<?php
//Segurança
include '../controle/validarLogin.php';
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>Cadastro de Usuário</title>
    </head>
    <body>
    <center>
        <div class="container">
            <div class="well"><strong>CADASTRO DE USUÁRIO</strong></div> 
            <form action="../controle/cadastrarUsario.php" method="post" name="cadastrousuario" method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <td>Nome do Usuário:</td>
                        <td><input type="text" name="nome" size="30" maxlength="90"/></td>
                    </tr>
                    <tr>
                        <td>Login:</td>
                        <td><input type="text" name="login" size="10" maxlength="45"/></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input type="password" name="senha" size="10" maxlength="10"/></td>
                    </tr>
                    <tr>
                        <td>Perfil:</td>
                        <td> 
                            <input type="radio" class="" value="1"name="perfil"/>Administrador
                            <input type="radio" value="2" name="perfil"/>Usuário
                        </td>
                    </tr>  
                    <tr>
                        <td>Foto:</td>
                        <td> 
                            <input type="file" id="foto" class="form-control-file" name="foto" />
                        </td>
                    </tr>  
                    <tr>
                        <td>
                            <input type="submit" class="btn btn-success" value="Cadastrar"/>
                            <input type="reset" class="btn btn-primary"  value="Limpar">
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
