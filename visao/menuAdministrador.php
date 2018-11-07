<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- jQuery v3.3.1 -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap (currently v3.3.7) JS -->
        <script src="js/bootstrap.js"></script>
        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-default" style="margin-bottom: 0px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">MeuSistema</a>
                </div>
                <ul class="nav navbar-nav">
                    <li ><a href="index.php" target="centro"><i class='glyphicon glyphicon-home'></i> Início</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class='glyphicon glyphicon-user'></i> Usuários<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="listarUsuarios.php" target="centro"><i class='glyphicon glyphicon-list'></i> Listar </a></li>
                            <li><a href="formCadastrarUsuario.php" target="centro"><i class='glyphicon glyphicon-plus'></i> Cadastrar </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class='glyphicon glyphicon-user'></i> Clientes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="listarClientes.php" target="centro"><i class='glyphicon glyphicon-list'></i> Listar </a></li>
                            <li><a href="formCadastrarCliente.php" target="centro"><i class='glyphicon glyphicon-plus'></i> Cadastrar </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>
