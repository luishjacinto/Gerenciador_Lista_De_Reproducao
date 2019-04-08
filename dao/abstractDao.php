<?php

abstract class AbstractDao{

    protected function criaConexao(){
        $scon="port=5432 host=localhost dbname='gerenciadorListaDeReproducao' user=postgres password=teste";
        return pg_connect($scon);
    }
    abstract public function listar(int $limit, int $offset);
    abstract public function buscar($id);
    abstract public function inserir($obj);
    abstract public function deletar($obj); 
    abstract public function alterar($obj); 
}
    
?>