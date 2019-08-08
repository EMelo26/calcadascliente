<?php
//conecta ao banco de dados
include('conecta_banco.php');

// Inicia sessões 
session_start(); 

// Agora verifica a senha 
if(!strcmp($password_login, $dados["password"])) 
{ 
// TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário 
$_SESSION["nome_usuario"] = $dados["email"];
$_SESSION["email_usuario"] = $dados["nome"];  
header("Location: acesso_interno.php"); 
exit; 
} 
// Senha inválida 
else 
{ 
echo "Senha inválida!"; 
exit; 
} 
} 
// Login inválido 
else 
{ 
echo "O login fornecido por você é inexistente!"; 
exit; 
} 

// Recupera o login 
$email_login = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE; 
// Recupera a senha, a criptografando em MD5 
$password_login = isset($_POST["password"]) ? md5(trim($_POST["password"])) : FALSE; 

// Usuário não forneceu a senha ou o login 
if(!$email_login || !$password_login) 
{ 
echo "Você deve digitar sua senha e email!"; 
exit; 
} 

// seleciona a base de dados em que vamos trabalhar
// cria a instrução SQL que vai selecionar os dados
$query = "SELECT * FROM `dados_usuarios` WHERE email="$email_login" AND senha="$password_login"";

// executa a query
$dados = mysqli_query($con, $query);

// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
	$total = mysqli_num_rows($dados);
	if(mysqli_num_rows($dados) > 0 ){
		header('Location:acesso_interno.php?dados='.$total);
		

?>