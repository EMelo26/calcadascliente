<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../Processos.ico">

    <title>Calcada-Porto Alegre</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
	
	
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Trabalho PHP</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Calçadas Rebaixadas Porto Alegre</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action="cadastro_cli.php" method="POST">	
			 <button name="cadastro" type="submit" class="btn btn-success"> Cadastre-se</button>
		  </form>	
		  <form class="navbar-form navbar-right" action="controller_login.php" method="POST">	
            <div class="form-group">
              <input  name="email" type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input name="pass" type="password" placeholder="Password" class="form-control">
            </div>
            <button name="sign" type="submit" class="btn btn-success">Sign in</button>	
		  </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="container">
    <!--<div class="jumbotron">-->
	  <table>
    	 <tr>
	   	<td>
		    <img width="300" height="300" alt="Porto Alegre" src="http://thecityfixbrasil.com/files/2013/09/selo_calcada.jpg"/>
		</td>
			<td>Muitos  estudiosos  afirmam  que  a  qualidade  de  urbanização  de  uma 
				cidade encontra 
				o  seu  ponto  crucial 
				nas  calçadas,  ou  seja,  as  calçadas  são  um  parâmetro  para  se 
				medir o nível de desenvolvimento de uma cidade.
				As   cidades   deveriam   ser   planejadas   para   as   pessoas,   as   quais 
				primordialmente  caminham.  A  acessibilidade  das  calçadas,  portanto, 
				é  uma  questão  de  extrema 
				importância,  não  só  para  que  as  pessoas  com  deficiência  consigam  utilizá-las,  mas,  na  verdade, 
				para toda  a  população,  sejam  crianças,  jovens,  adultos,  idosos.  Quando  as  calçadas  não  estão 
				adequadas, todos sofrem, principalmente idosos e pessoas com mobilidade reduzida.Deve-se  destacar  que  é  enorme  o  número  de  acidentes  por  causa  de 
				problemas  em  calçadas.  Por  isso,  é  necessário  que  os  pavimentos  sejam  bem  nivelados,  sem 
				buracos e dotados de rebaixamentos bem feitos para o acesso por
				cadeiras de rodas.
			</td>
				<tr>
					Vale  destacar  que  as  calçadas  precisam  ter  largura  suficiente  e,  de 
						  preferência,  serem  dotadas  de  arborização,para  que  as  pessoas  possam  se  proteger  do  sol,e  de boa iluminação para aqueles que a usam no período noturno.Outro  detalhe importante  é  a  presença  de  equipamentos  que  tornem  o caminhar mais agradável, como bancos e jardins, e mais seguro, a exemplo defaixas de travessia, semáforos especiais, placas de sinalização, entre outros.
				</tr>
		</tr>
		</table>
        <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
     <!--  </div>-->
    </div>
      <footer>
        <center><p>&copy; 2016 Company, Inc.</p></center>
      </footer>
	  
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
