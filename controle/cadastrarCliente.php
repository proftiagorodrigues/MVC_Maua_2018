<?php
require_once '../modelo/Cliente.php';
require_once '../modelo/ClienteDAO.php';
require '../util/funcaoData.php';


// Recuperando os dados do formulario
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$dataNascimento = dateBRtoDateUS($_POST["dt_nascimento"]);
$sexo = $_POST["sexo"];
$endereco = $_POST["endereco"];

$cliente = new Cliente();
$cliente->setNome($nome);
$cliente->setCpf($cpf);
$cliente->setRg($rg);
$cliente->setDataNascimento($dataNascimento);
$cliente->setSexo($sexo);
$cliente->setEndereco($endereco);

$clienteDAO = new ClienteDAO();
$sucesso = $clienteDAO->cadastrar($cliente);

if ($sucesso){
   $msg = "Cliente cadastrado com sucesso!"; 
   header('Location: ../visao/listarClientes.php?msg='.$msg);
}
?>

