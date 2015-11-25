<?php 
function listaPerguntas($link){
	$perguntas = array();
	$resultado = mysqli_query($link, "select * from pergunta") or mysql_error();
	while($pergunta = mysqli_fetch_assoc($resultado)){
		array_push($perguntas, $pergunta);
	}
return $perguntas;
}

function listaCategorias($link){
	$categorias = array();
	$resultado = mysqli_query($link, "select * categoria") or mysql_error();
	while($categoria = mysqli_fetch_assoc($resultado)){
		array_push($categorias, $categoria);
	}
	return $categorias;
}

function inserePergunta($link, $perguntatxt, $respostacorreta, $respostaerrada1, $respostaerrada2, $respostaerrada3, $respostaerrada4){
	$sql = "INSERT INTO `pergunta` (`pergunta`, `RespostaCorreta`, `RespostaErrada1`, `RespostaErrada2`, `RespostaErrada3`, `RespostaErrada4`, `idCategoria`) VALUES ('{$perguntatxt}', '{$respostacorreta}', '{$respostaerrada1}','{$respostaerrada2}', '{$respostaerrada3}', '{$respostaerrada4}', 1)";
	//$query = mysqli_query( $link, $sql) or die(mysql_error());
	//echo $sql;
	return mysqli_query( $link, $sql) or die(mysql_error());
}
function removePergunta($link,$id){
	$query = "delete from pergunta where id = {'idPergunta'}";
	echo $query;
	return mysqli_query($link, $query);
}

?>