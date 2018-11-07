<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="imagens/mauaFavicon.ico" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title>Início</title>
    </head>
    <body>
        <?php
            include '../controle/validarLogin.php';
        ?> 
        <table class="table" style="margin-bottom: 0px;">
            <tr>
                <td width="85%">
                    <?php
                    switch ($_SESSION["perfil"]) {
                        case "Administrador":
                            include './menuAdministrador.php';
                            break;
                        case "Usuario":
                            include './menuUsuario.php';
                            break;
                    }
                    ?>
                </td>
                <td align="right" width="15%">
                    
                    <?php
                    if (isset($_SESSION["usuario"])) {
                        echo "<i class='glyphicon glyphicon-user'></i> ", $_SESSION["usuario"];
                        echo "<br />";
                        echo "<i class='glyphicon glyphicon-lock' title='Perfil'></i> ", $_SESSION["perfil"];
                    }
                    ?>
                    <br>
                    <a href="../controle/efetuarLogoff.php" title="sair"><i class='glyphicon glyphicon-log-out'></i></a>
                </td>
            </tr>
        </table>
        <table id="tablehome">
            <tr>         
                <td>
                    <iframe name="centro" src="" width="100%" height="100%" frameborder="1" style="border-bottom: 0;"></iframe>
                </td>
            </tr>                
        </table>
        <?php include './rodape.php'; ?>
    </body>
</html>
