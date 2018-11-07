<?php
    include '../controle/validarLogin.php';
?> 
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagens/mauaFavicon.ico">

    <title>Início 2</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap4.css" rel="stylesheet">

    <!-- Estilos customizados -->
    <link href="css/estilo.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="fontawesome/css/all.css" rel="stylesheet">
  </head>

  <body style="padding-top: 5rem;">

    <!--    Menu Superior  -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" target="conteudo" href="index.php">Início <span class="sr-only">(atual)</span></a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownUser" data-toggle="dropdown"  target="conteudo">Usuários</a>
              <div class="dropdown-menu" aria-labelledby="dropdownUser">
                <a class="dropdown-item" href="listarUsuarios.php" target="conteudo"><i class="fa fa-list-alt"></i> Listar</a>
                <a class="dropdown-item" href="formCadastrarUsuario.php" target="conteudo"><i class="fa fa-plus-square"></i> Cadastrar</a>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownClient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
            <div class="dropdown-menu" aria-labelledby="dropdownClient">
                <a class="dropdown-item" href="listarClientes.php" target="conteudo"><i class="fa fa-list-alt"></i> Listar</a>
                <a class="dropdown-item" href="formCadastrarCliente.php" target="conteudo"><i class="fa fa-plus-square"></i> Cadastrar</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Administração</a>
          </li>
        </ul>
<!--        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>-->
    <ul class="nav justify-content-end">
        <a id="ahover" href="#" onclick="document.getElementById('pop').style.display = 'block';">
            <img  src="fotos/<?php echo $_SESSION['foto']; ?>" class="img-circle" width="50" height="40" title="Sair"/>
        </a>
        <a href="../controle/efetuarLogoff.php" title="sair"><i class='fa fa-sign-out-alt'></i></a>
    </ul>
    </nav>
    <main role="main">
        <!-- Referência https://getbootstrap.com.br/docs/4.1/utilities/embed/ -->
        <div class="embed-responsive embed-responsive-1by1">
            <iframe name="conteudo" src="" class="embed-responsive-item" ></iframe>
        </div>
        <div id="pop">
            <p  id="pImagem">
                    <img src="fotos/<?php echo $_SESSION['foto'] ?>" class="img-circle" width="100" height="100" /><br>
                    <b>
                    <?php
                    echo $_SESSION["perfil"];
                    echo ":&nbsp;";
                    echo $_SESSION["usuario"]
                    ?>
                    </b><br>Deseja sair do Sistema!
            </p>
            <p  id="pBotoes">
                <a class="btn-sim" href="../controle/efetuarLogoff.php">SIM</a>&nbsp;&nbsp;
                <a class="btn-nao" href="#" onclick="document.getElementById('pop').style.display = 'none';">NÃO</a>
            </p>
        </div>
    </main><!-- /.container -->

    <!-- JavaScript do Bootstrap    -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap4.js"></script>
  </body>
</html>
