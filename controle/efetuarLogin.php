<?php
require_once '../modelo/LoginDAO.php';

$login = $_POST["login"];
$senha = $_POST["senha"];

$loginDAO = new LoginDAO();
$usuario = $loginDAO->login($login, $senha);

if (!empty($usuario)) {
    session_start();
    $_SESSION["MVC"] = TRUE;
    $_SESSION["usuario"] = $usuario->login;
    $_SESSION["nome_usuario"] = $usuario->nome;
    $_SESSION["perfil"] = $usuario->perfil;
    $_SESSION["foto"] = $usuario->foto;
    
    //Log dos logins
    $dthoje = date("Y_m_d");
    $arquivo = fopen("../logs/loginNoSistema.$dthoje.txt", "a");
    $dthora = date("H:i:s d/m/Y");
    fwrite($arquivo, "Usuario: [$usuario->login], logou no sistema na data [$dthora].\n");
    fclose($arquivo);
    
    header('Location: ../visao/principal2.php');
} else {
    $msg = "Usuário e/ou senha inválidos!";
    header('Location: ../index.php?msg='.$msg);
}

