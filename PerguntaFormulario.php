<?php include("cabecalho.php"); 
include("conecta.php");
include("funcoesPergunta.php");?>

	<form method="POST" action="adicionaPergunta.php">
	
		<label >Categoria</label></br>
		<select name="categoria" id="categoria">
			<option>Selecione uma Categoria</option>
			<?php// $categorias = listaCategorias($link);
				//foreach($categorias as $categoria): 
				?>
				<!--<option><?= $categoria['nomeCategoria'] ?></option>-->
			<?php
				//endforeach;
			?>
		</select></br>
		<label for="pergunta">Pergunta</label></br>
		<textarea type="text" name="pergunta" id="pergunta" cols="50"  required="true"></textarea>
		<br/>
		<label for="respostaCorreta">Resposta Correta</label></br>
		<textarea type="text" name="respostaCorreta" id="respostaCorreta" cols="50"  required="true"></textarea>
		<br/>
		<label for="respostaErrada1">Resposta Errada1</label> </br>
		<textarea type="text" name="respostaErrada1" id="respostaErrada1" cols="50"  required="true"></textarea>
		<br/>
		<label for="respostaErrada2">Resposta Errada2</label></br>
		<textarea type="text" name="respostaErrada2" id="respostaErrada2" cols="50"  required="true"></textarea>
		<br/>
		<label for="respostaErrada3">Resposta Errada3</label></br>
		<textarea type="text" name="respostaErrada3" id="respostaErrada3" cols="50"  required="true"></textarea>
		<br/>
		<label for="respostaErrada4">Resposta Errada4</label></br>
		<textarea type="text" name="respostaErrada4" id="respostaErrada4" cols="50" required="true"></textarea><br/>
		</br>
		<input type="submit" value="Cadastrar" class="btn btn-success"/> <input type="reset" value="Apagar" class="btn btn-danger"/>

	</form>
	<?php include("rodape.php");?>