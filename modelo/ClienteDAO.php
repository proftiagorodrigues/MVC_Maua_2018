<?php

require_once 'conexao/Conexao.php';
require_once 'Cliente.php';

class ClienteDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getConexao();
    }

    /**
     * Retorna todos os clientes existentes no banco de dados
     */
    public function listarTodos() {
        try {
            $sql = "SELECT * FROM cliente";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $clientes = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    /**
     * Cadastra o objeto cliente no banco de dados
     * @param Cliente $cliente
     */
    public function cadastrar(Cliente $cliente) {
        try {
            $sql = "INSERT INTO cliente (nome,cpf,rg,dt_nascimento,endereco,sexo) 
                    VALUES (:nome,:cpf,:rg,:dt_nascimento,:endereco,:sexo)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue("nome", $cliente->getNome());
            $stmt->bindValue("cpf", $cliente->getCpf());
            $stmt->bindValue("rg", $cliente->getRg());
            $stmt->bindValue("dt_nascimento", $cliente->getDataNascimento());
            $stmt->bindValue("endereco", $cliente->getEndereco());
            $stmt->bindValue("sexo", $cliente->getSexo());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    /**
     * Exclui o cliente a partir do id
     * @param type $idcliente
     */
    public function excluir($idcliente) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM cliente WHERE id_cliente = ?");
            $stmt->bindValue(1, $idcliente);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    /**
     * Retorna o cliente com id correspondente do parâmetro
     * @param type $idclient
     */
    public function getCliente($idcliente) {
        try {
            $sql = "SELECT * FROM cliente WHERE id_cliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcliente);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_OBJ);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    /**
     * Altera as informações do cliente na base de dados 
     * (Obs.: o cliente deve vim com ID para saber qual cliente atualizar)
     * @param Cliente $cliente
     */
    public function alterar(Cliente $cliente) {
        try {
            $sql = "UPDATE cliente SET nome=:nome,
                                       cpf=:cpf,
                                       rg=:rg,
                                       dt_nascimento=:dt_nascimento,
                                       endereco=:endereco,
                                       sexo=:sexo
                    WHERE id_cliente= :id_cliente";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue("nome", $cliente->getNome());
            $stmt->bindValue("cpf", $cliente->getCpf());
            $stmt->bindValue("rg", $cliente->getRg());
            $stmt->bindValue("dt_nascimento", $cliente->getDataNascimento());
            $stmt->bindValue("endereco", $cliente->getEndereco());
            $stmt->bindValue("sexo", $cliente->getSexo());
            $stmt->bindValue("id_cliente", $cliente->getIdCliente());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
