<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="/visao/imagens/mauaFavicon.ico" />
        <link rel="stylesheet" type="text/css" href="visao/css/estilo.css">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="visao/css/bootstrap.css">
        <title>Login</title>
    </head>
    <body>
        <center>
        <div id="divlogin">
            <p id="logologin">
                <img src="visao/imagens/faculdadeMaua.png" alt="Logo"/>
            </p>
            <form action="controle/efetuarLogin.php" method="post" id="formlogin">
                <table align="center" >
                    <tr>
                        <td>Usuário:</td>
                        <td><input type="text" name="login"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input type="password" name="senha"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>                    
                        <td>&nbsp;</td>
                        <td>
                            <input type="reset" class="btn btn-default" value="Limpar"/>
                            <input type="submit" class="btn btn-default" value="Entrar"/>
                        </td>
                    </tr>                                                                
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                </table>
            </form> 
        </div>
        </center>
    <center>
        <?php
        if (!empty($_GET["msg"])) {
            echo "<div id='error'>", $_GET["msg"], "</div>";
        }
        ?>
    </center>
    <footer>
        Sistema 1.0 &COPY; <?php $date = date("Y"); echo " $date"; ?>
    </footer>
    
</body>
</html>
