<?php
// conecta o banco
include('conecta_banco.php');

	// lê todos os inf_calcadas(ruas)
$resultado = mysqli_query($conexao,"SELECT * FROM inf_calcadas");
if ($resultado == false) {
	
		echo mysqli_error($conexao);
		
	}
while ($linha = mysqli_fetch_assoc($resultado)) {
?>

		<tr>
			<td><?= $linha['id'] ?></td>
			<td><?= $linha['nome'] ?></td>
			<td><?= $linha['cep'] ?></td>
			<td><?= $linha['excluir_rua.php.php'] ?></td>
           <td><?= $linha['adicionar_rua.php'] ?></td>
		</tr>	
<?php
}
?>

