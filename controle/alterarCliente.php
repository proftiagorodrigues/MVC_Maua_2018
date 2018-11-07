<?php
require_once '../modelo/Cliente.php';
require_once '../modelo/ClienteDAO.php';
require '../util/funcaoData.php';

// Recupera os dados do formulario
$idCliente = $_POST["idcliente"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$dataNascimento = dateBRtoDateUS($_POST["dt_nascimento"]);
$sexo = $_POST["sexo"];
$endereco = $_POST["endereco"];


$cliente = new Cliente();
$cliente->setIdCliente($idCliente);
$cliente->setNome($nome);
$cliente->setCpf($cpf);
$cliente->setRg($rg);
$cliente->setDataNascimento($dataNascimento);
$cliente->setSexo($sexo);
$cliente->setEndereco($endereco);

$clienteDAO = new ClienteDAO();
$sucesso=$clienteDAO->alterar($cliente);

if ($sucesso) {
    $msg = "Cliente atualizado com sucesso!";
    header('Location: ../visao/formAlterarCliente.php?idcliente=' . $idCliente . '&msg=' . $msg);
}
?>
