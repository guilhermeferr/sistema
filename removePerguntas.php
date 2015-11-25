<?php include("cabecalho.php");
 include("conecta.php");
 include("funcoesPergunta.php");
 
 $id = $_GET['idPergunta'];
 if(removePergunta($link, $id)){
 ?>
 <div class="alert alert-success" role="alert"><strong>Pergunta <?=$pergunta['idPergunta']?></strong> foi Removida com Sucesso</div>
<?php } else{?>
	<div class="alert alert-danger" role="alert"><strong>Pergunta</strong> não pode ser removida</div>
<?php } 

?>