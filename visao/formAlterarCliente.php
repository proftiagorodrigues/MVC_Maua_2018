<!DOCTYPE html>
<?php
include '../controle/validarLogin.php';
include '../util/funcaoData.php';
require_once '../modelo/ClienteDAO.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Bootstrap (currently v3.3.7) CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>Alterar Cliente</title>
    </head>
    <?php
    $idcliente = $_GET["idcliente"];
    $clienteDAO = new ClienteDAO();
    $cliente = $clienteDAO->getCliente($idcliente);
    ?>
    <body>
        <div class="container">
            <div class="well"><strong>Alterar Cliente</strong></div> 
            <form action="../controle/alterarCliente.php" method="post">
                <input type="hidden" name="idcliente" value="<?php echo $cliente->id_cliente ?>"/>
                <table class="table">
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" value="<?php echo $cliente->nome ?>" name="nome" size="50"/></td>
                    </tr>
                    <tr>
                        <td>CPF:</td>
                        <td><input type="text" value="<?php echo $cliente->cpf ?>" name="cpf"/></td>
                    </tr>                
                    <tr>
                        <td>RG:</td>
                        <td><input type="text" value="<?php echo $cliente->rg ?>" name="rg"/></td>
                    </tr>                                
                    <tr>
                        <td>Data de Nascimento:</td>
                        <td><input type="text" value="<?php echo dateUStoDateBR($cliente->dt_nascimento) ?>" name="dt_nascimento"/></td>
                    </tr>                                                
                    <tr>
                        <td>Sexo:</td>
                        <td>
                            Masculino <input type="radio" <?php echo $cliente->sexo == "M" ? 'checked' : ''; ?> name="sexo" value="M"/>
                            Feminino <input type="radio" <?php echo $cliente->sexo == "F" ? 'checked' : ''; ?>  name="sexo" value="F"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Endereço:</td>
                        <td><input type="text" size="60" value="<?php echo $cliente->endereco ?>" name="endereco"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" value="Alterar"/>
                            <a href="listarClientes.php"><input type="button" class="btn btn-primary" value="Voltar"/></a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php
                            if (!empty($_GET["msg"])) {
                                echo "<div class='alert alert-info'>", $_GET["msg"], "</div>";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
