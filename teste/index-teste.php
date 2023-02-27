<?php
//Classes
require_once 'app\model\Noticia.php';
require_once 'app\model\Dba.php';
require_once 'app\model\Conexao.php';

$noticia = new App\Model\Noticia;

$noticia->setTitulo("Teste PDO POO Upgrade");
$noticia->setCategoria("Teste POO");
$noticia->setDescricao("Testando POO");
$noticia->setImagem("teste imagem POO");
$noticia->setId(130);

$dba = new App\Model\Dba;
/* CRIAR
$dba->create($noticia);
*/

/* LER
$dba->read();

foreach($dba->read() as $noticia):
    echo $noticia['titulo'] . "<br>" . $noticia['descricao']. "<hr>";
endforeach;
*/

/* Update
$dba->update($noticia);
*/

/* DELETE
$dba->delete($noticia);
*/