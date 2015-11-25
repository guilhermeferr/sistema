<?php 
function insereCategoria($link,$categoriatxt){
	$sql = "INSERT INTO `categoria` (`nome`) VALUES ('{$categoriatxt}')";
	//echo $sql;
	return mysqli_query( $link, $sql) or die(mysql_error());
}

function listaCategorias($link){
	$categorias = array();
	$resultado = mysqli_query($link, "select * categoria");
	if(!$resultado){
		echo 'MySQL Error: ' . mysqli_error();
        exit;
	}
	
	while($categoria = mysqli_fetch_assoc($resultado)){
		array_push($categorias, $categoria);
	}
	return $categorias;
}

?>