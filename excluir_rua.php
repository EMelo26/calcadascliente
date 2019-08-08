<?php
// conecta o banco
include('conecta_banco.php');

$del = "DELETE FROM dados_usuarios WHERE ID =".$_POST['id'];
$delgo = mysql_query($del) or die('Erro ao deletar');
echo "deletado";

?>

