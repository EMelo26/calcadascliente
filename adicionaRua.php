<?php
//session_start () ;

//adiciona rua nas tabelas
$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="calcadas_db"; // Database name 
$con = mysqli_connect($host, $username, $password, $db_name); 


$nomeRua= $_POST['nome_rua'];
$cepRua=  $_POST['cep_rua'];


 $sql = "INSERT INTO inf_calcadas(`nome`, `cep`) VALUES ('$nomeRua', '$cepRua')"; 
	// cria a instrução SQL que vai selecionar os dados
	$resultado = mysqli_query($con,$sql);
	
		if ($resultado == false) {
			echo mysqli_error($con);
		}
	include('cadastra_rua.php');
?>