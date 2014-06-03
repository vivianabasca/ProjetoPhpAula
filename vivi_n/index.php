<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
		<title>Login</title>
		<style type="text/css">
		


body {

  background-color: #5cb85c !important ;
}

#msform {
	width: 400px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	position: absolute;
}
#msform fieldset:not(:first-of-type) {

	display: none;
}



</style>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<body>

	  
	  <form id="msform" name="form" method="post" action="senha.php">
	  
	  	<fieldset>
	<h1>Login</h1>
  <div class="input-group input-group-lg">
    <span class="input-group-addon"><span class="glyphicon glyphicon-user"> </span></span>
  <input type="text" class="form-control" placeholder="Username" name="login" id="login">
</div><br>
   <div class="input-group input-group-lg">
    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"> </span></span>
  <input type="password" class="form-control" placeholder="•••••••••••" name="senha" id="senha">
	
</div>
  <br>
      <input type="submit" class="btn btn-success">
	  
	  
	  
	  
	  
	  <p></p>
<p>Ainda não é cadastrado? <a href="cadastrar.php">Clique aqui! </a> </p>
 	<p><p>
	<br /><br />
	
	<a href="ver_clientes.php">Usuários Cadastrados!</a> </p>
	
	<br /><br />

	</fieldset>
	
</form>

	
</body>
  