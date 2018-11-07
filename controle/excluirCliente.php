<?php
require_once '../modelo/ClienteDAO.php';

//recebe o id do cliente pela URL
$idCliente = $_GET["idcliente"];
$clienteDAO = new ClienteDAO();
$sucesso = $clienteDAO->excluir($idCliente);

if ($sucesso){
   $msg = "Cliente excluido com sucesso!"; 
}else{
   $msg = "Erro ao excluir o cliente!";  
}

header('Location: ../visao/listarClientes.php?&msg='.$msg);


