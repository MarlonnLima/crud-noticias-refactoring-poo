<?php
//Sessão
session_start();
//Conexão
require_once 'App\Model\Conexao.php';
require_once 'App\Model\Dba.php';
require_once 'App\Model\Noticia.php';

$dba = new App\Model\Dba;

//Header
include_once 'includes/header.php';

//Banner
include_once 'includes/banner.php';
//timezone
date_default_timezone_set("America/Sao_Paulo");
?>
<?php
if(isset($_SESSION['admin'])){ 
  if($_SESSION['admin'] == true){
  echo "<a class = 'botao fundo-roxo texto-branco d-inline-block my-2 mx-4' href='adicionar.php'>Adicionar Noticia</a>";
  }
 } ?>
<h1 class ="titulo">Noticias</h1>
<div class="row row-cols-1 row-cols-md-3 mx-2">

<?php
$dba->read();

foreach($dba->read() as $noticia){
?>
  <div class="col">
    <div class="card my-2">
      <img src="images/uploads/<?php echo $noticia['imagem'];?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $noticia['titulo'];?></h5>
        <span class ="categoria-noticia"><?php echo $noticia['categoria']; ?></span>
        <!-- Aqui estou usando uma span para conter o texto se não as tags vazam e sobrepoem as outras -->
        <div class="card-text">
          <div>
            <?php echo substr(strip_tags($noticia['descricao']), 0, 100) . '...'; ?>

            <a class ="d-block w-100 botao fundo-roxo texto-branco text-center" href ="noticia.php?noticia=<?= $noticia['id']?>">Veja mais!</a>

    
         </div>
        </div>
      </div>
    </div>
  </div>

  

<?php
}
?>
</div>

<?php
include_once 'includes/footer.php'
?>