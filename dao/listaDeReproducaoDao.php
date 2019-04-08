<?php

include_once("abstractDao.php");

class ListaDeReproducaoDao extends AbstractDao{
    
    public function listar($limit, $offset){
			$conn = $this->criaConexao();
			$sql = "SELECT * FROM 'listaDeReproducao' LIMIT $1 OFFSET $2";
			$res = pg_query_params($conn, $sql, array($limit, $offset));
			
			$listasDeReproducao = array();
			while($linha = pg_fetch_assoc($res)){
				$l = new ListaDeReproducao($linha['nome']);
				$l->setIdLista(intval($linha['idLista']));
				
				array_push($listasDeReproducao,$l);
			}
			pg_close($conn);
			return $listasDeReproducao;
    }
    
    public function buscar($idLista){
			$conn = $this->criaConexao();
			$sql = "SELECT * FROM 'listaDeReproducao' WHERE 'idLista' = $1";
			$res = pg_query_params($conn, $sql, array($idLista));
			$linha = pg_fetch_assoc($res);
					$l = new ListaDeReproducao($linha['nome']);
			$l->setIdLista(intval($linha['idLista']));
			
			pg_close($conn);
			return $l;
    } 
    
    public function inserir($listaDeReproducao){
			$conn = $this->criaConexao();
			$sql2 ="INSERT INTO 'listaDeReproducao' ('nome') 
					VALUES ($1) RETURNING 'idLista'"; 
			$vetor = array($listaDeReproducao->getNome());
			
			$res = pg_query_params($conn, $sql2, $vetor);
					$linha = pg_fetch_assoc($res);
					$listaDeReproducao->setId(intval($linha['idLista']));
			pg_close($conn);
		}
		
    public function deletar($idLista){
			$conn = $this->criaConexao();
			$sql = "DELETE FROM 'listaDeReproducao' WHERE 'idLista' = $1";
			$res = pg_query_params($conn, $sql, array($idLista));
			pg_close($conn);
    }
    
    public function alterar($listaDeReproducao){
			$conn = $this->criaConexao();
			$sql="UPDATE 'listaDeReproducao' SET 'nome' = $1 WHERE 'idLista' = $2  ";
			$vet = array($listaDeReproducao->getNome(),
									$listaDeReproducao->getIdLista());
			$res = pg_query_params($conn, $sql, $vet);
		}

}

?> 