<?php
require_once '../modelo/Usuario.php';
require_once '../modelo/UsuarioDAO.php';

// Recuperando os dados do formulario
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$idPerfil = $_POST["perfil"];

//Instancia a classe passando o arquivo (atributo name no form).
if (isset($_FILES["foto"])) {
    require_once '../modelo/Upload.class.php';
    $dir_dest = "../visao/fotos";
    $upload = new Upload($_FILES['foto'], $dir_dest);

    // verifica se foi realizado corretamente o upload
    if ($upload->processed) {
        $foto = $upload->file_dst_name;
    }
}

$novoUsuario=new Usuario($nome, $login, md5($senha), $idPerfil, $foto);

$usuarioDAO = new UsuarioDAO();
$sucesso = $usuarioDAO->cadastrar($novoUsuario);

if ($sucesso){
   $msg = "Usuário cadastrado com sucesso!"; 
   header('Location: ../visao/listarUsuarios.php?msg='.$msg);
}
?>