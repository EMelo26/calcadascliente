<?php 
// Verificador de sessão 
require "verifica.php"; 

// Verifica se usuário tem permissão para excluir arquivos. 
// adicionar um coluna no banco de dados com o nome adm.
if($_SESSION["adm"] !== "S") 
{ 
echo "Você não tem permissão para excliuir arquivos!"; 
exit; 
} 

// Se o script continuar aqui, é que o usuário tem permissão 
// Então.. seu formulário de postagem abaixo 
?>