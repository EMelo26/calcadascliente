<?php

session_start () ;

// conecta o banco
include('conecta_banco.php');

$nomeRua = $_GET['pesq'];

// lê todos os inf_calcadas(ruas)
 $result = mysqli_query($conexao, $db_name); or print(mysqli_error()); 
 $sql= ("SELECT nome, cep, id FROM inf_calcadas WHERE nome LIKE '%$nomeRua%' or cep LIKE '%$nomeRua%'"); 
$result = mysqli_query($conexao, $sql); 

if ($result == false){
echo mysqli_error($conexao);
}

while ($linha = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?= $linha['id'] ?></td>
<td><?= $linha['nome'] ?></td>
<td><?= $linha['cep'] ?></td>
<td><?= $linha['excluir.php'] ?></td>
<td><?= $linha['adicionar.php'] ?></td>
</tr>	
<?php
}
?>