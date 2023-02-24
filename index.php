<?php
require_once 'app\model\Noticia.php';
require_once 'app\model\Dba.php';
require_once 'app\model\Conexao.php';

$noticia = new App\Model\Noticia;

$noticia->setTitulo("Teste PDO POO");
$noticia->setCategoria("Teste POO");
$noticia->setDescricao("Testando POO");
$noticia->setImagem("teste imagem POO");

$dba = new App\Model\Dba;
//$dba->create($noticia);