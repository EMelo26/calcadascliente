     <?php
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="calcadas_db"; // Database name 
	$conexao = mysqli_connect ("localhost", "root", "", "calcadas_db");
	//declara input e variavel
	$nome_rua = $_POST['nome_rua'];
	$numero   = $_POST['numero'  ];
	$cep_rua  = $_POST['cep_rua' ];

	//verifica se estão preenchidas
	if($nome_rua && $numero && $cep_rua){	
		$resultado = mysqli_query($conexao,"INSERT INTO add_calcadas (nome, numero, cep ) VALUES ('$nome_rua', '$numero','$cep_rua')");
	if ($resultado == false) {
	
		echo mysqli_error($conexao);	
	}
	
       echo 'to aqui';

        while ($linha = mysqli_fetch_assoc($resultado)) {
     ?>
		<tr>
			<td> <?= $linha['nome'] ?> </td>
			<td> <?= $linha['numero'] ?> </td>
			<td> <?= $linha['cep'] ?> </td>
		</tr>	
      <?php
      }
      ?>