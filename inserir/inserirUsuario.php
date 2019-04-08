<?php

include_once("../classes/classUsuario.php");
include_once("../dao/UsuarioDao.php");


$u = new Usuario($_POST['nome'],$_POST['nickname'],$_POST['email'],$_POST['senha']);
//var_dump($m);
$udao = new UsuarioDao();

$udao->inserir($u);

echo "usuario \"".$u->getNome()."\" (".$u->getIdUsuario().") inserido com sucesso!";

?>