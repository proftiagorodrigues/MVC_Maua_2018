<!DOCTYPE html>
<?php
include '../controle/validarLogin.php';
require_once '../modelo/ClienteDAO.php';
require_once '../util/funcaoData.php';
?> 
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap4.css">
        <title>Lista de Clientes</title>        
    </head>
    <body>
    <br />
    <center>
        <div class="container">
            <div class="well"><strong>Lista de Clientes</strong></div> 
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-info">
                        <th>Nome</th>
                        <th>Cpf</th>
                        <th>Rg</th>
                        <th>Sexo</th>
                        <th>Data de Nascimento</th>
                        <th>endereco</th>
                        <th>Excluir</th>
                        <th>Alterar</th>
                    </tr>
                </thead>

                <?php
                $clienteDAO = new ClienteDAO();
                $clientes = $clienteDAO->listarTodos();

                foreach ($clientes as $cliente) {
                    echo "<tr>";
                    echo "  <td>{$cliente->nome}</td>";
                    echo "  <td>{$cliente->cpf}</td>";
                    echo "  <td>{$cliente->rg}</td>";
                    echo "  <td>{$cliente->sexo}</td>";
                    echo "  <td>", dateUStoDateBR($cliente->dt_nascimento), "</td>";
                    echo "  <td>{$cliente->endereco}</td>";
                    echo "  <td><a href='../controle/excluirCliente.php?idcliente={$cliente->id_cliente}'>Excluir</a></td>";
                    echo "  <td><a href='formAlterarCliente.php?idcliente={$cliente->id_cliente}'>Alterar</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <?php
            if (!empty($_GET["msg"])) {
                echo "<div class='alert alert-success'>", $_GET["msg"], "</div>";
            }
            ?>
        </div>
    </center>
</body>
</html>
