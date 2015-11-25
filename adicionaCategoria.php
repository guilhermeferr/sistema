<?php include("cabecalho.php"); 
include("conecta.php");
include("funcoesCategoria.php"); 

$categoriatxt = $_POST['nomeCategoria'];

if(insereCategoria($link, $categoriatxt)){ ?>
<div class="alert alert-success" role="alert"><strong>Categoria</strong> foi adicionada com Sucesso</div>
<?php } else{?>
	<div class="alert alert-danger" role="alert"><strong>Categoria</strong> não pode ser adicionada</div>
<?php } 

?>
<a href="CategoriaFormulario.php"><button class="btn btn-default">Voltar</button></a>