<?php

class Musica{
    
    private $idMusica;
    private $nome;
    private $duracao;
    private $autor;
    private $link;
   
    public function __construct($nome, $duracao, $autor, $link){
        $this->nome = $nome;
        $this->duracao = $duracao;
        $this->autor = $autor;
        $this->link = $link;
    }
    //GET
    public function getIdMusica(){
        return $this->idMusica;
    }
    public function getNome(){
        return $this->nome;
    }

    public function getDuracao(){
        return $this->duracao;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getLink(){
        return $this->link;
    }
    //SET
    public function setIdMusica($idMusica){
        $this->idMusica = $idMusica;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setDuracao($duracao){
        $this->duracao = $duracao;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function setLink($link){
        $this->link = $link;
    }

}

?>