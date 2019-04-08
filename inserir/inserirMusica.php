<?php

include_once("../classes/classMusica.php");
include_once("../dao/musicaDao.php");


$m = new Musica($_POST['nome'],intval($_POST['duracao']),$_POST['autor'],$_POST['link']);
//var_dump($m);
$mdao = new MusicaDao();

$mdao->inserir($m);

echo "musica \"".$m->getNome()."\" (".$m->getIdMusica().") inserida com sucesso!";

?>