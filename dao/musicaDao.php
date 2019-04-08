<?php

include_once("abstractDao.php");

class MusicaDao extends AbstractDao{
    
    public function listar($limit, $offset){
			$conn = $this->criaConexao();
			$sql = "SELECT * FROM musica LIMIT $1 OFFSET $2";
			$res = pg_query_params($conn, $sql, array($limit, $offset));
			
			$listaMusicas = array();
			while($linha = pg_fetch_assoc($res)){
				$m = new Usuario($linha['nome'],intval($linha['duracao']),$linha['autor'],$linha['link']);
				$m ->setIdMusica(intval($linha['idMusica']));
				array_push($listaMusicas,$m);
			}
			pg_close($conn);
			return $listaMusicas;
    }
    
    public function buscar($idMusica){
			$conn = $this->criaConexao();
			$sql = "SELECT * FROM musica WHERE 'idMusica' = $1";
			$res = pg_query_params($conn, $sql, array($idMusica));
			$linha = pg_fetch_assoc($res);
			$m = new Musica($linha['nome'],$linha['duracao'],$linha['autor'],$linha['link']);
			$m->setIdMusica(intval($linha['idMusica']));
			
			pg_close($conn);
			return $m;
    } 
    
    public function inserir($musica){
			$conn = $this->criaConexao();
			$sql2 ="INSERT INTO musica ('nome', 'duracao', 'autor', 'link') 
					VALUES ($1,$2,$3,$4) RETURNING 'idMusica'"; 
			$vetor = array($musica->getNome(), $musica->getDuracao(), $musica->getAutor(), $musica->getLink());
			
			$res = pg_query_params($conn, $sql2, $vetor);
					$linha = pg_fetch_assoc($res);
					$usuario->setId(intval($linha['idMusica']));
			pg_close($conn);
		}
		
    public function deletar($idMusica){
			$conn = $this->criaConexao();
			$sql = "DELETE FROM musica WHERE 'idMusica' = $1";
			$res = pg_query_params($conn, $sql, array($idMusica));
			pg_close($conn);
    }
    
    public function alterar($musica){
			$conn = $this->criaConexao();
			$sql="UPDATE musica SET 'nome' = $1, 'duracao' = $2, 'autor' = $3, 'link' = $4 WHERE 'idMusica' = $5  ";
			$vet = array($musica->getNome(), 
											$musica->getDuracao(), 
											$musica->getAutor(),
											$musica->getLink(),
											$musica->getIdMusica());
			$res = pg_query_params($conn, $sql, $vet);
		}

}

?> 