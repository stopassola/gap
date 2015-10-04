<?php
if(is_file("./config/global.ini")) $ini = parse_ini_file("./config/global.ini");
//Se houver um arquivo local de configurações, sobrescreve
if(is_file("./config/local.ini")) $ini = parse_ini_file("./config/local.ini");

include "./_conexao/conecta.inc.php"; 
include "./GeraDocumento.class.php"; 

$documento = new GeraDocumento();
$documento = null; //invoca o método __destruct que salva o arquivo
?>