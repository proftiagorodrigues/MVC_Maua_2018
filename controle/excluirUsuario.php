<?php
require_once '../modelo/UsuarioDAO.php';

$idUsuario = $_GET["idusuario"];
$usuarioDAO = new UsuarioDAO();
$sucesso = $usuarioDAO->excluir($idUsuario);

if ($sucesso){
   $msg = "Usuário excluido com sucesso!"; 
}else{
   $msg = "Erro ao excluir o usuário!";  
}

header('Location: ../visao/listarUsuarios.php?&msg='.$msg);