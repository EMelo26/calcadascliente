  <?php
session_start();
?>
  
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
      <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="dashboard.css" rel="stylesheet">

      <script src="assets/js/ie-emulation-modes-warning.js"></script>

    </head>

    <body>
			 
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
         <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"> <? $user ?></a></li>
              <li><a href="#">Contato</a></li>
              <li><a href="index.php">Sair</a></li>
            </ul>
          </div>
        </div>
      </nav>
     <div>
				<form name='search' method = "GET"><div>
					<span class="breadcrumb">
						<a href="acesso_interno.php">Página Inicial</a>
						&nbsp >> &nbsp Pesquisa Endereço
					 </span>
				</div>
				  <h2>Pesquisar o Endereço</h2><input name="pesq" type="text" class="form-control" placeholder="Search...">
				  <button  type="submit" class="btn btn-success">Pesquisar</button>
				  </form>		 	
				   <table class="table table-striped">
				  <div class="table-responsive">
					<table class="table table-striped">
				  <h2 class="page-header">Calçadas Rebaixadas Porto Alegre</h2>
				  
					  <thead>
						<tr>
						  <th>ID</th>
						  <th>Nome da Rua</th>
						  <th>Cep</th>
						  <th>Link Mapa</th>
						</tr>
					  </thead>
					  <tbody>
					    <?php include('pesquisa_endereco.php')?>
					  </tbody>
					</table>
				  </div>
				</div> 
      
      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="../../dist/js/bootstrap.min.js"></script>
      <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
      <script src="../../assets/js/vendor/holder.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
  </html>