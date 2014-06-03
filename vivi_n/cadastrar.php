<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastra-se</title>
</head>
<style type="text/css">
body{	
			background-color:#398439;;	
			color:#000; 
			width:1024px;
		}
<body>
</style>
<div align="center"><b>Preencha os dados corretamente:</b><br />
  <br /> 
</div>
<form action="cadastro.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

   <div align="center"><b>Nome:</b><br /> 
      <input type="text" name="nome" id="textfield" />
    </div>
  </label>
  <p align="center">
   <b>Login:</b></b><br />
      <input type="text" name="login" id="textfield2" />
  </p>
  <p align="center">
   <b>Senha: </b></b><br />
   <input type="password" name="senha" id="textfield3" />
  </p>
  <p align="center">
   <b>Confirme a senha: </b></b><br />
   <input type="password" name="confirmasenha" id="textfield3" />
   <p align="center">
  <p align="center">
   <b>Foto:   </b></b><br />
     <label>
    <input type="file" name="arquivo" id="fileField" />
    </label>
  </p>
  <p align="center">
    <label>
    <input type="submit" name="button" id="button" value="Cadastrar" />
    </label>
</p>
</form>
</body>
</body>
</html>
