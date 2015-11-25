<?php
$host = "localhost";
$user = "root";
$pass = "root";


//Realiza Conexão
$link = mysqli_connect($host, $user, $pass);
if (!$link) {
    die('Não Conectado : ' . mysql_error());
}

// Seleciona o Schema
$db_selected = mysqli_select_db( $link ,'PENSE');
if (!$db_selected) {
   die ('Não selecionado : ' . mysql_error());
}