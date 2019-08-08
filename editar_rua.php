<?php
// conecta o banco
include('conecta_banco.php');

$id = $_GET["id"];

Abre_Conexao();
$re    = mysql_query("select count(*) as total from dados_usuarios where dados_usuarios = $id");	
$total = mysql_result($re, 0, "total");

if($total ==1 ) {
	$re    = mysql_query("SELECT * FROM dados_usuarios ORDER BY dados_usuarios");
	$dados = mysql_fetch_array($re);		
}
?>

