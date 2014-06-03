<?php // fotos.php
include_once('funcao.php');
session_start();
session_name('secreta');
if($_SESSION['validacao']==1){
$login = $_SESSION['login'];
$arquivo = "clientes.txt";
$fp = fopen($arquivo,"r");
$clientes = fgets($fp);
fclose($fp);

			$clientes = explode("/",$clientes);
			for($i=0;$i<sizeof($clientes);$i++){
			  $partes = explode("*",$clientes[$i]);
					  if($partes[1]==$login){
						 for($j=3;$j<sizeof($partes);$j++){
						 echo "<a href='imagem.php?imagem=$partes[$j]'><img src= 'imagens/$partes[$j]' width='200' heigth='200' /></a>";
						 
						 echo 
					
					     }
			           } 
             } 
 
}

$arquivo = "imagens.txt";
$fp = fopen($arquivo,"r");
$imagem = fgets($fp);
fclose($fp);
$vetor = explode("/",$imagem);
$tam = sizeof($vetor); // tamanho de um vetor

$resultado = mostra_imagem($imagem,$login);

//exibir as imagens no navegador
//for($i=1;$i<$tam;$i++)
//{
//	$nome = explode("-",$vetor[$i]);
//	if($login == $nome[1])
//	{
//		echo "<a href='imagem.php?imagem=$vetor[$i]'><img src= '$nome[0]' width='200' height='140' /></a>";
//	}
//}

?>



<br>
<form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">  
  <label>
    <input type="file" name="arquivo" id="fileField" />
    </label>
    </p>
  <p>
    <label>
	<input type="hidden" name="login" id="login" value="<?php echo $login; ?>" />
    <input type="submit" name="button" id="button" value="Enviar foto" />
    </label>
</form>
<br>
<br>
<a href="secreta.php">Retorne ao perfil!</a> </p>