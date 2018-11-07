<?php
require_once '../modelo/Usuario.php';
require_once '../modelo/UsuarioDAO.php';

// Recuperando os dados do formulario
$idUsuario = $_POST["idUsuario"];
$nome = $_POST["nome"];
$login = $_POST["login"];
$senhaAntiga = $_POST["senha_antiga"];
$novaSenha = $_POST["senha"];
$idPerfil = $_POST["perfil"];

if(isset($_FILES["foto"]))
{
    require_once '../modelo/Upload.class.php';
    $dir_dest = "../visao/fotos";
    $upload = new Upload($_FILES['foto'], $dir_dest);
    //verifica se foi realizado corretamente o upload
    if ($upload->processed) {
        $foto = $upload->file_dst_name;      
    }
}

$usuario = new Usuario($nome, $login, $senhaAntiga, $idPerfil, $foto);
$usuario->setIdUsuario($idUsuario);
$usuario->setNome($nome);
$usuario->setLogin($login);
$usuario->setIdPerfil($idPerfil);
$usuario->setFoto($foto);
if (empty($novaSenha)) {
    $usuario->setSenha($senhaAntiga);
} else {
    $usuario->setSenha(md5($novaSenha));
}

$usuarioDAO = new UsuarioDAO();
$sucesso = $usuarioDAO->editar($usuario);

if ($sucesso) {
    $msg = "Usuário atualizado com sucesso!";
    header('Location: ../visao/formAlterarUsuario.php?idusuario=' 
            . $idUsuario . '&msg=' . $msg);
}
?>