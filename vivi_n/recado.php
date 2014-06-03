<?php
session_start();
session_name('secreta');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
Recado:<br />
<form id="form1" name="form1" method="post" action="">
  <label> 
  <textarea name="mensagem" id="textarea" cols="45" rows="5"></textarea>
  </label>
  <label> <br />
  <input type="submit" name="button" id="button" value="Enviar Mensagem" />
  </label>
  
  <input type="hidden" value="<?php $_SESSION['nome']?>" />
</form>

<p>
  <?php
$mensagem = $_POST['mensagem'];
$arquivo = "texto.txt";         // Transforma o arquivo em variavel
$fp = fopen($arquivo,"r");      // Le o arquivo
$texto = fgets($fp);            // Captura o que ta no texto e joga na variavel
$texto = $mensagem."*".$texto;  // Concatena a nova mensagem com a antiga
$fp = fopen($arquivo,"w");      
fwrite($fp,$texto);
$texto = explode("*",$texto);
for($i=1;$i<sizeof($texto);$i++){
echo "Recado: $texto[$i] <br>";
}

?>

<br /><a href="secreta.php">Retorne ao perfil!</a> </p>