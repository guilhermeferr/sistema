<?php include("cabecalho.php");
 include("conecta.php");
 include("funcoesPergunta.php");?>

 <div class="panel panel-default">
	<table class="table table-striped table-bordered table-hover">
	<tr>
		<td width="5"><b>ID</b></td>
		<td><b>Pergunta</b></td>
		<td><b>Resposta Correta</b></td>
		<td  width="10"><b>Opções</b></td>
	</tr>

<?php
$perguntas = listaPerguntas($link);
foreach($perguntas as $pergunta):
?>
	
	<tr>
		<td><?= $pergunta['idPergunta']?></td>
		<td><?= $pergunta['Pergunta']?></td>
		<td><?= $pergunta['RespostaCorreta']?></td>
		<td>
			<div class="btn-group">
				<button type="button" class="btn btn-default">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				
				<a href="removePerguntas.php?id=<?= $pergunta['idPergunta']?>">
					<button type="button" class="btn btn-default" name="Remover" title="Remover">
						<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
					</button>
				</a>
			</div>
		</td>
	</tr>
<?php
endforeach;
?>
	</table>
</div>

<?php include("rodape.php");?>
















<?php include("rodape.php");?>