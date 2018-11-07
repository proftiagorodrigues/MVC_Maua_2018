<?php
session_start();
if (!isset($_SESSION["usuario"]) && !isset($_SESSION["MVC"])) {
    $msg="Usuário não autenticado!";
    header('Location: ../index.php?msg='.$msg);
}
?>
