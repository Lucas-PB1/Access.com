<?php include_once("../admin/header_adm.php");
#conteudo
if(empty($_SERVER["QUERY_STRING"])){
	$var = "login_adm.php";
	include_once("$var");
}else{
	$pg = $_GET['pg'];
	include_once("$pg.php");
}
include_once("../admin/footer_adm.php") ?>