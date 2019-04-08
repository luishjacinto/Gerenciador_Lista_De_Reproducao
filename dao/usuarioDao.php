<?php

include_once("abstractDao.php");

class UsuarioDao extends AbstractDao{
    
    public function listar($limit, $offset){
			$conn = $this->criaConexao();
			$sql = "SELECT * FROM usuario LIMIT $1 OFFSET $2";
			$res = pg_query_params($conn, $sql, array($limit, $offset));
			
			$listaUsuarios = array();
			while($linha = pg_fetch_assoc($res)){
				$u = new Usuario($linha['nome'],$linha['nickname'],$linha['email'],$linha['senha']);
				$u->setIdUsuario(intval($linha['idUsuario']));
				
				array_push($listaUsuarios,$u);
			}
			pg_close($conn);
			return $listaUsuarios;
    }
    
    public function buscar($idUsuario){
			$conn = $this->criaConexao();
			$sql = "SELECT * FROM usuario WHERE 'idUsuario' = $1";
			$res = pg_query_params($conn, $sql, array($idUsuario));
			$linha = pg_fetch_assoc($res);
			$u = new Usuario($linha['nome'],$linha['nickname'],$linha['email'],$linha['senha']);
			$u->setIdUsuario(intval($linha['idUsuario']));
			
			pg_close($conn);
			return $u;
    } 
    
    public function inserir($usuario){
			$conn = $this->criaConexao();
			$sql2 ="INSERT INTO usuario ('nome', 'nickname', 'email', 'senha') 
					VALUES ($1,$2,$3,$4) RETURNING 'idUsuario'"; 
			$vetor = array($usuario->getNome(), $usuario->getNickname(), $usuario->getEmail(), $usuario->getSenha());
			
			$res = pg_query_params($conn, $sql2, $vetor);
					$linha = pg_fetch_assoc($res);
					$usuario->setId(intval($linha['idUsuario']));
			pg_close($conn);
		}
		
    public function deletar($idUsuario){
			$conn = $this->criaConexao();
			$sql = "DELETE FROM usuario WHERE 'idUsuario' = $1";
			$res = pg_query_params($conn, $sql, array($idUsuario));
			pg_close($conn);
    }
    
    public function alterar($usuario){
			$conn = $this->criaConexao();
			$sql="UPDATE usuario SET 'nome' = $1, 'nickname' = $2, 'email' = $3, 'senha' = $4 WHERE 'idUsuario' = $5  ";
			$vet = array($usuario->getNome(),
										$usuario->getNickname(),
										$usuario->getEmail(),
										$usuario->getSenha(),
										$usuario->getIdUsuario());
			$res = pg_query_params($conn, $sql, $vet);
		}

}

?> 