<?php include("cabecalho.php"); 
include("conecta.php");
include("funcoesPergunta.php");




$perguntatxt = $_POST['pergunta'];
$respostacorreta = $_POST['respostaCorreta'];
$respostaerrada1 = $_POST['respostaErrada1'];
$respostaerrada2 = $_POST['respostaErrada2'];
$respostaerrada3 = $_POST['respostaErrada3'];
$respostaerrada4 = $_POST['respostaErrada4'];
//$idcategoria = 

if(inserePergunta($link, $perguntatxt, $respostacorreta, $respostaerrada1, $respostaerrada2, $respostaerrada3, $respostaerrada4)){?>
	<div class="alert alert-success" role="alert"><strong>Pergunta</strong> foi adicionada com Sucesso</div>
<?php } else{?>
	<div class="alert alert-danger" role="alert"><strong>Pergunta</strong> não pode ser adicionada</div>
<?php } 
?>


<a href="PerguntaFormulario.php"><button class="btn btn-default">Voltar</button></a>
<?php include("rodape.php");?>