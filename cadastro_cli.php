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
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php">Pagina Principal</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
		   <!-- Login -->
            <li><a href="#"> <?php $user ?></a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="index.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="jumbotron">
		 <center><h2 class="sub-header">Criar Dados de login</h2>
			<form  action ="controller_cadastro.php" method ="POST" > 
				<table>    
					  <fieldset>
				 <table cellspacing="1">
          <tr>
         <label for="login">ID: </label>
           </td>
           <td align="left">
          <input name="cadlogin" type="hidden" name="id"maxlength="20" size="20">
				  </tr>
           <tr>
				   <td>
					<label  for="email">E-mail: </label>
				   </td>
				   <td align="left">
					<input name="cademail" type="text" name="email"maxlength="30" size="30">
				   </td>
				  </tr>
				  <tr>
				   <td>
					<label for="login">Login de usuário: </label>
				   </td>
				   <td align="left">
					<input name="cadlogin" type="text" name="login"maxlength="20" size="20">
				   </td>
				  </tr>
				  <tr>
				   <td>
					<label for="pass">Senha: </label>
				   </td>
				   <td align="left">
					<input name="cadpass" type="password" name="pass"maxlength="10" size="10">
				   </td>
				  </tr>
				  <tr>
				   <td>
					<label for="passconfirm">Confirme a senha: </label>
				   </td>
				   <td align="left">
					<input name="cadpassconfirm" type="password" name="passconfirm"maxlength="10" size="10">
				   </td>
				  </tr>
				 </table>
				</fieldset>
				<br />
			  </table>
			        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					 <button name "pesq type="reset" class="btn btn-success">Limpar</button>
					 <button name "pesq type="submit" class="btn btn-success">Cadastrar</button>
					</div>
			</form>
         </center>			
        </div>
        </div>
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
