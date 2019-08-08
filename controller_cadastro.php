<?php

//conecta ao banco de dados
include('conecta_banco.php');

$cademail= trim($_POST['cademail']);
$cadpassword= $_POST['cadpass'];
$cadpssconf=  $_POST['cadpassconfirm'];
$cadlogin = $_POST['cadlogin'];

$sql = "INSERT INTO dados_usuarios (nome, email, senha ) VALUES ('$cadlogin','$cademail','$cadpassword')";

if($cademail && $cadpassword && $cadpssconf && $cadlogin ){
	// cria a instrução SQL que vai selecionar os dados
	
	$resultado = mysqli_query($conexao,$sql);
	
	if ($resultado == false) {
	
		echo mysqli_error($conexao);
		
	}
}else{
	
}
	include('acesso_interno.php');
?>

