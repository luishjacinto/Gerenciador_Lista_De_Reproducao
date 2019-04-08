<?php

class Usuario{
    
    private $idUsuario;
    private $nome;
    private $nickname;
    private $email;
    private $senha;
   
    public function __construct($nome, $nickname, $email, $senha){
        $this->nome = $nome;
        $this->nickname = $nickname;
        $this->email = $email;
        $this->senha = $senha;
    }
    //GET
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function getNome(){
        return $this->nome;
    }

    public function getNickname(){
        return $this->nickname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }
    //SET
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setNickName($nickname){
        $this->nickname = $nickname;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

}

?>