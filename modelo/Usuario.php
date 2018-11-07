<?php

class Usuario {

    private $idUsuario;
    private $nome;
    private $login;
    private $senha;
    private $idPerfil;
    private $dataCadastro;
    private $foto;

    function __construct($nome, $login, $senha, $idPerfil, $foto) {
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
        $this->idPerfil = $idPerfil;
        $this->dataCadastro = date("Y-m-d");
        $this->foto = $foto;
    }

    //Gets e Sets
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getIdPerfil() {
        return $this->idPerfil;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setIdPerfil($idPerfil) {
        $this->idPerfil = $idPerfil;
    }
    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }
    
    function getFoto() {
        return $this->foto;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

}
