<?php

class ListaDeReproducao{
    
    private $idLista;
    private $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
    //GET
    public function getIdLista(){
        return $this->idLista;
    }
    public function getNome(){
        return $this->nome;
    }
    //SET
    public function setIdLista($idLista){
        $this->idLista = $idLista;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
}

?>