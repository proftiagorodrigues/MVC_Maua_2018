<?php

class Perfil {

    private $idPerfil;
    private $nome;

    function __construct($nome) {
        $this->nome = $nome;
    }

    //Gets e Sets
    function getIdPerfil() {
        return $this->idPerfil;
    }

    function getNome() {
        return $this->nome;
    }

    function setIdPerfil($idPerfil) {
        $this->idPerfil = $idPerfil;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

}
