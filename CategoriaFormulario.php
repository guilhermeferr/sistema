<?php 
include("cabecalho.php"); 
include("conecta.php");
include("funcoesCategoria.php"); 
?>
<form method="POST" action="adicionaCategoria.php">
	<label for"nomeCategoria">Categoria</label></br>
	<input id="nomeCategoria" name="nomeCategoria" type="text" required="true"/>
	</br></br>
	<input type="submit" value="Cadastrar" class="btn btn-success"/> <input type="reset" value="Apagar" class="btn btn-danger"/>
</form>
<?php

?>

<div class="panel panel-default">
	<table class="table table-striped table-bordered table-hover">
	<tr>
		<td width="5"><b>ID</b></td>
		<td><b>Categoria</b></td>
		<td  width="10"><b>Opções</b></td>
	</tr>
	<?php
	$categorias = listaCategorias($link);
	foreach($categorias as $categoria):
	?>
	<tr>
		<td><?= $categoria['IdCategoria']?></td>
		<td><?= $pergunta['nomeCategoria']?></td>
		<td>
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			</button>
			
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			</button>
		</td>
	</tr>
<?php
endforeach;
?>
	</table>
</div>
<?php include("rodape.php");?>