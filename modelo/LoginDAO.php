<?php

require_once 'conexao/Conexao.php';

class LoginDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getConexao();
    }

    public function login($login,$senha) {
        try {
            
            $sql="SELECT u.`id_usuario`, u.`nome`, u.`login`,  p.`nome` as perfil, u.`foto` \n"
                . "FROM `usuario` AS u \n"
                . "INNER JOIN perfil AS p ON (u.id_perfil=p.id_perfil) \n"
                . "WHERE login=:login AND senha=:senha";
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue("login", $login);
            $stm->bindValue("senha", md5($senha));
            $stm->execute();
            $usuario=$stm->fetch(PDO::FETCH_OBJ);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
